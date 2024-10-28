<?php

namespace App\Http\Controllers;

use App\Models\Chats;
use Illuminate\Http\Request;

class ChatsController extends Controller
{
    public function index()
    {
        // Retrieve all chats
        return Chats::with(['sender', 'receiver'])->get();
    }

    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'sender_id' => 'required|exists:users,id',
            'receiver_id' => 'required|exists:users,id',
            'message' => 'required|string',
            'is_read' => 'required|boolean',
        ]);

        // Create and return the new Chats message
        return Chats::create($request->only(['sender_id', 'receiver_id', 'message', 'is_read']));
    }

    public function show(Chats $Chats)
    {
        // Return a specific Chats message
        return $Chats;
    }

    public function update(Request $request, Chats $Chats)
    {
        // Validate the incoming request
        $request->validate([
            'is_read' => 'required|boolean',
        ]);

        // Update and return the Chats message
        $Chats->update($request->only(['is_read']));
        return $Chats;
    }

    public function destroy(Chats $Chats)
    {
        // Delete the Chats message
        $Chats->delete();
        return response()->json(['message' => 'Chats message deleted successfully.'], 204);
    }
}
