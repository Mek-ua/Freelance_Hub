<?php

namespace App\Http\Controllers;

use App\Models\Proposals;
use Illuminate\Http\Request;

class ProposalsController extends Controller
{
    public function index()
    {
        // Retrieve all proposals with related project and user data
        return Proposals::with('user', 'project')->get();
    }

    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'how_long' => 'required|integer',
            'cover_letter' => 'required|string',
            'file' => 'nullable|json',
            'propose_price' => 'required|numeric',
            'user_id' => 'required|exists:users,id',
            'projects_id' => 'nullable|exists:projects,id',
        ]);

        // Create and return the new proposal
        return Proposals::create($request->only(['how_long', 'cover_letter', 'file', 'propose_price', 'user_id', 'projects_id']));
    }

    public function show(Proposals $Proposals)
    {
        // Return a specific Proposals with related user and project data
        return $Proposals->load('user', 'project');
    }

    public function update(Request $request, Proposals $Proposals)
    {
        // Validate the incoming request
        $request->validate([
            'how_long' => 'required|integer',
            'cover_letter' => 'required|string',
            'file' => 'nullable|json',
            'propose_price' => 'required|numeric',
        ]);

        // Update and return the Proposals
        $Proposals->update($request->only(['how_long', 'cover_letter', 'file', 'propose_price']));
        return $Proposals;
    }

    public function destroy(Proposals $Proposals)
    {
        // Delete the Proposals
        $Proposals->delete();
        return response()->json(['message' => 'Proposals deleted successfully.'], 204);
    }
}
