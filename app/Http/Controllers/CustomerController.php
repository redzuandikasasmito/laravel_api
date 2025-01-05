<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        return Customer::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'rt' => 'required|integer|min:1|max:255',
            'rw' => 'required|integer|min:1|max:255',
            'no_telp' => 'required|string|max:15',
            'paket' => 'required|string|max:255',
        ]);

        $customer = Customer::create($validated);
        return response()->json($customer, 201);
    }

    public function show($id)
    {
        $customer = Customer::find($id);
        if (!$customer) {
            return response()->json(['message' => 'Customer not found'], 404);
        }
        return response()->json($customer, 200);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama' => 'sometimes|required|string|max:255',
            'rt' => 'sometimes|required|integer|min:1|max:255',
            'rw' => 'sometimes|required|integer|min:1|max:255',
            'no_telp' => 'sometimes|required|string|max:15',
            'paket' => 'sometimes|required|string|max:255',
        ]);

        $customer = Customer::findOrFail($id);
        $customer->update($validated);
        return response()->json($customer, 200);
    }

    public function destroy($id)
    {
        $customer = Customer::find($id);
        if (!$customer) {
            return response()->json(['message' => 'Customer not found'], 404);
        }
        $customer->delete();
        return response()->json(null, 204);
    }
}
