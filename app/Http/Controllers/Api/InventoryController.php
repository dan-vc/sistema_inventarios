<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    // GET /api/inventories
    public function index()
    {
        return response()->json(
            Inventory::with('product')->get(),
            200
        );
    }

    // POST /api/inventories
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'stock'      => 'required|integer|min:0'
        ]);

        $inventory = Inventory::create($request->all());
        return response()->json($inventory, 201);
    }

    // GET /api/inventories/{id}
    public function show($id)
    {
        $inventory = Inventory::with('product')->find($id);

        if (!$inventory) {
            return response()->json(['message' => 'Inventario no encontrado'], 404);
        }

        return response()->json($inventory, 200);
    }

    // PUT /api/inventories/{id}
    public function update(Request $request, $id)
    {
        $inventory = Inventory::find($id);

        if (!$inventory) {
            return response()->json(['message' => 'Inventario no encontrado'], 404);
        }

        $request->validate([
            'stock' => 'required|integer|min:0'
        ]);

        $inventory->update($request->all());
        return response()->json($inventory, 200);
    }

    // DELETE /api/inventories/{id}
    public function destroy($id)
    {
        $inventory = Inventory::find($id);

        if (!$inventory) {
            return response()->json(['message' => 'Inventario no encontrado'], 404);
        }

        $inventory->delete();
        return response()->json(['message' => 'Inventario eliminado'], 200);
    }
}
