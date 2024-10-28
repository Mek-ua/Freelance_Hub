<?php

namespace App\Http\Controllers;

use App\Models\Notifications;
use Illuminate\Http\Request;

class NotificationsController extends Controller
{
    public function index()
    {
        // Retrieve all notifications with related user and message
        return Notifications::with(['user', 'NotificationsMessage'])->get();
    }

    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'Notifications_message' => 'required|string',
            'seen' => 'required|boolean',
            'Notifications_message_id' => 'required|exists:Notifications_messages,id',
            'user_id' => 'required|exists:users,id', // Ensure the user exists
        ]);

        // Create and return the new Notifications
        return Notifications::create($request->only(['Notifications_message', 'seen', 'Notifications_message_id', 'user_id']));
    }

    public function show(Notifications $Notifications)
    {
        // Return a specific Notifications
        return $Notifications;
    }

    public function update(Request $request, Notifications $Notifications)
    {
        // Validate the incoming request
        $request->validate([
            'Notifications_message' => 'sometimes|required|string',
            'seen' => 'sometimes|required|boolean',
        ]);

        // Update and return the Notifications
        $Notifications->update($request->only(['Notifications_message', 'seen']));
        return $Notifications;
    }

    public function destroy(Notifications $Notifications)
    {
        // Delete the Notifications
        $Notifications->delete();
        return response()->json(['message' => 'Notifications deleted successfully.'], 204);
    }
}
