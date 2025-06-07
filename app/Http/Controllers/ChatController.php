<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Chat;
use Illuminate\Http\Request;

final class ChatController extends Controller
{
    public function create()
    {
        return inertia('chat/Create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Chat $chat)
    {
        //
    }

    public function destroy(Chat $chat)
    {
        //
    }
}
