<?php

declare(strict_types=1);

namespace App\Http\Resources;

use App\Models\Chat;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin Chat
 */
final class ChatResource extends JsonResource
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
            'groupName' => $this->group_name,
            'type' => $this->type,
            'createdBy' => $this->created_by,
            'createdAt' => $this->created_at,

            'members' => UserResource::collection($this->members),
            'messages' => MessageResource::collection($this->messages),
        ];
    }
}
