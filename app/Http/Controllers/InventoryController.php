<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;
use Carbon\Carbon;

class InventoryController extends Controller
{
    public function index()
    {
        return Inventory::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'inventory_id' => 'nullable|integer|min:1',
            'item_name' => 'required|string|max:255',
            'quantity' => 'required|integer|min:0',
            'expiration_date' => 'nullable|date',
        ]);

        $validated['inventory_id'] = (int) ($validated['inventory_id'] ?? ((int) Inventory::max('inventory_id') + 1));

        return Inventory::create($validated);
    }

    public function nearExpiry()
    {
        $date = Carbon::now()->addDays(30);
        return Inventory::where('expiration_date','<=',$date)->get();
    }
}
