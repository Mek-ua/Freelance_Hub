<?php

namespace App\Http\Controllers;

use App\Models\Educational_status;
use Illuminate\Http\Request;

class EducationalStatusController extends Controller
{
    public function index()
    {
        return Educational_status::all(); // Retrieve all educational statuses
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:educational_statuses',
            'user_id' => 'required|exists:users,id',
        ]);

        return Educational_status::create($request->only(['name', 'user_id']));
    }

    public function show(Educational_status $Educational_status)
    {
        return $Educational_status; 
    }

    public function update(Request $request, Educational_status $Educational_status)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:educational_statuses,name,' . $Educational_status->id,
        ]);

        $Educational_status->update($request->only(['name']));
        return $Educational_status;
    }

    public function destroy(Educational_status $Educational_status)
    {
        $Educational_status->delete(); 
        return response()->json(['message' => 'Educational status deleted successfully.'], 204);
    }
}
