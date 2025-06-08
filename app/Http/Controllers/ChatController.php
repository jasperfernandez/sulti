<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Chat;
use Illuminate\Http\Request;
use Inertia\Response;
use Throwable;

final class ChatController extends Controller
{
    public function create(): Response
    {
        return inertia('chat/Create');
    }

    public function store(Request $request)
    {
        //
    }

    /**
     * @throws Throwable
     */
    public function edit(Chat $chat): Response
    {
        return inertia('chat/Edit', [
            'chat' => $chat->toResource(),
        ]);
    }

    public function destroy(Chat $chat)
    {
        //
    }
}
