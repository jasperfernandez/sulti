<?php

declare(strict_types=1);

namespace App\Actions;

use App\Models\Chat;
use App\Models\User;

final class GetRecentChats
{
    public function handle(int $userId): array
    {
        $user = User::findOrFail($userId);

        if (! $user) {
            return [];
        }

        $unreadMessages = $user->unreadMessages();

        return Chat::query()
            ->whereHas('members', fn ($query) => $query->where('user_id', $userId))
            ->get()
            ->map(function(Chat $chat) use ($user, $unreadMessages) {
                $lastMessage = $chat->messages()
                    ->latest()
                    ->first();

                $members = $chat->members
                    ->where('id', '!=', $user->id);

                $hasUnreadMessage = $unreadMessages->where('chat_id', $chat->id)->exists();

                return [
                    'chatId' => $chat->id,
                    'members' => $members,
                    'lastMessage' => $lastMessage?->content,
                    'lastMessageAt' => $lastMessage?->created_at?->diffForHumans(),
                    'hasUnreadMessage' => $hasUnreadMessage,
                ];
            })
            ->toArray();
    }
}
