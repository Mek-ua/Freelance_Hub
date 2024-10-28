<?php

namespace App\Http\Controllers;

use App\Models\Service_fees;
use Illuminate\Http\Request;

class ServiceFeesController extends Controller
{
    public function index()
    {
        // Get all service fees
        return Service_fees::all();
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'percent' => 'required|numeric|min:0|max:100',
            'state' => 'required|boolean',
            'user_id' => 'required|exists:users,id',
        ]);

        // Create a new service fee
        return Service_fees::create($request->only(['percent', 'state', 'user_id']));
    }

    public function show(Service_fees $Service_fees)
    {
        // Return the specified service fee
        return $Service_fees;
    }

    public function update(Request $request, Service_fees $Service_fees)
    {
        // Validate the request
        $request->validate([
            'percent' => 'required|numeric|min:0|max:100',
            'state' => 'required|boolean',
        ]);

        // Update the service fee
        $Service_fees->update($request->only(['percent', 'state']));
        return $Service_fees;
    }

    public function destroy(Service_fees $Service_fees)
    {
        // Delete the service fee
        $Service_fees->delete();
        return response()->json(['message' => 'Service fee deleted successfully.'], 204);
    }
}
