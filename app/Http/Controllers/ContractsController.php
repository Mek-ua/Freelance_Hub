<?php

namespace App\Http\Controllers;

use App\Models\Contracts;
use Illuminate\Http\Request;

class ContractsController extends Controller
{
    public function index()
    {
        // Retrieve all contracts with related proposal, user, and service fee data
        return Contracts::with('proposal', 'user', 'serviceFee')->get();
    }

    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'proposals_id' => 'required|exists:proposals,id',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'term_and_conditions' => 'required|string',
            'file' => 'nullable|json',
            'pro_is_finished' => 'required|boolean',
            'client_is_finished' => 'required|boolean',
            'service_fee_status' => 'required|integer',
            'acceptance_status' => 'required|integer',
            'user_id' => 'required|exists:users,id',
            'service_fee_id' => 'required|exists:service_fees,id',
        ]);

        // Create and return the new Contracts
        return Contracts::create($request->only([
            'proposals_id', 'start_date', 'end_date', 'term_and_conditions', 'file', 
            'pro_is_finished', 'client_is_finished', 'service_fee_status', 
            'acceptance_status', 'user_id', 'service_fee_id'
        ]));
    }

    public function show(Contracts $Contracts)
    {
        // Return a specific Contracts with related data
        return $Contracts->load('proposal', 'user', 'serviceFee');
    }

    public function update(Request $request, Contracts $Contracts)
    {
        // Validate the incoming request
        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'term_and_conditions' => 'required|string',
            'file' => 'required|json',
            'pro_is_finished' => 'required|boolean',
            'client_is_finished' => 'required|boolean',
            'service_fee_status' => 'required|integer',
            'acceptance_status' => 'required|integer',
        ]);

        // Update and return the Contracts
        $Contracts->update($request->only([
            'start_date', 'end_date', 'term_and_conditions', 'file', 
            'pro_is_finished', 'client_is_finished', 'service_fee_status', 
            'acceptance_status'
        ]));

        return $Contracts;
    }

    public function destroy(Contracts $Contracts)
    {
        // Delete the Contracts
        $Contracts->delete();
        return response()->json(['message' => 'Contracts deleted successfully.'], 204);
    }
}
