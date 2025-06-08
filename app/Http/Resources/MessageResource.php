<?php

namespace App\Http\Resources;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin Message
 * @property string sent_at
 */
final class MessageResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'content' => $this->content,
            'chatId' => $this->chat_id,
            'sentBy' => $this->sent_by,
            'sentAt' => $this->sent_at,

            'sender' => new UserResource($this->sender),
        ];
    }
}
