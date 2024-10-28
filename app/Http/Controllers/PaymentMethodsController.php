<?php

namespace App\Http\Controllers;

use App\Models\Payment_methods;
use Illuminate\Http\Request;

class PaymentMethodsController extends Controller
{
    public function index()
    {
        return Payment_methods::all(); 
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'api_address' => 'required|string|max:255',
            'token' => 'required|string',
            'user_id' => 'required|exists:users,id', // Assuming user_id should exist in users table
        ]);

        return Payment_methods::create($request->only(['name', 'api_address', 'token', 'user_id']));
    }

    public function show(Payment_methods $Payment_methods)
    {
        return $Payment_methods; 
    }

    public function update(Request $request, Payment_methods $Payment_methods)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'api_address' => 'required|string|max:255',
            'token' => 'required|string',
        ]);

        $Payment_methods->update($request->only(['name', 'api_address', 'token']));
        return $Payment_methods;
    }

    public function destroy(Payment_methods $Payment_methods)
    {
        $Payment_methods->delete(); 
        return [$Payment_methods];
    }
}
