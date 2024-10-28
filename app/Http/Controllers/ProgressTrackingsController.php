<?php

namespace App\Http\Controllers;

use App\Models\Progress_trackings;
use Illuminate\Http\Request;

class ProgressTrackingsController extends Controller
{
    public function index()
    {
        // Retrieve all progress trackings with related professional and contract
        return Progress_trackings::with(['professional', 'contract'])->get();
    }

    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'file' => 'nullable|json', // Assuming file will be a JSON string
            'message' => 'required|string',
            'proffesional_id' => 'required|exists:users,id', // Ensure professional exists
            'contract_id' => 'required|exists:contracts,id', // Ensure contract exists
        ]);

        // Create and return the new progress tracking
        return Progress_trackings::create($request->only(['file', 'message', 'proffesional_id', 'contract_id']));
    }

    public function show(Progress_trackings $Progress_trackings)
    {
        // Return a specific progress tracking
        return $Progress_trackings;
    }

    public function update(Request $request, Progress_trackings $Progress_trackings)
    {
        // Validate the incoming request
        $request->validate([
            'file' => 'nullable|json',
            'message' => 'sometimes|required|string',
        ]);

        // Update and return the progress tracking
        $Progress_trackings->update($request->only(['file', 'message']));
        return $Progress_trackings;
    }

    public function destroy(Progress_trackings $Progress_trackings)
    {
        // Delete the progress tracking
        $Progress_trackings->delete();
        return response()->json(['message' => 'Progress tracking deleted successfully.'], 204);
    }
}
