<?php

declare(strict_types=1);

namespace App\Dtos;

use App\Models\User;
use Illuminate\Support\Collection;

final readonly class RecentChatDto
{
    /**
     * @param  Collection<User>  $members
     */
    public function __construct(
        public Collection $members,
        public string $latestMessage,
        public string $relativeTime,
        public bool $hasUnreadMessage,
    ) {}

    /**
     * @param  ?Collection<User>  $members
     */
    public function copyWith(
        ?Collection $members = null,
        ?string $latestMessage = null,
        ?string $relativeTime = null,
        ?bool $hasUnreadMessage = null,
    ): self {
        return new self(
            $members ?? $this->members,
            $latestMessage ?? $this->latestMessage,
            $relativeTime ?? $this->relativeTime,
            $hasUnreadMessage ?? $this->hasUnreadMessage,
        );
    }
}
