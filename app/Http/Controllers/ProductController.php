<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('dashboard')->with('products', $products);
    }

    public function create()
    {
        return view('web.create');
    }

    public function store(Request $request)
    {
        // Validate and store the product
        $validatedProduct = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'status' => 'required|string',
            'barcode' => 'required|string|unique:products,barcode,',
            'weight' => 'required|numeric|min:0',
            'color' => 'required|string',
            'marca' => 'required|string',
        ]);

        $product = Product::create($validatedProduct);
        Inventory::create(['product_id' => $product->id, 'stock' => 0]);

        return redirect()->route('dashboard')->with('success', 'Producto creado con exito.');
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('web.show', compact('product'));
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('web.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'status' => 'required|string',
            'barcode' => 'required|string',
            'weight' => 'required|numeric|min:0',
            'color' => 'required|string',
            'marca' => 'required|string',
            'stock' => 'required|integer|min:0'
        ]);

        $product = Product::findOrFail($id);

        // Actualizar el producto
        $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'status' => $request->status,
            'barcode' => $request->barcode,
            'weight' => $request->weight,
            'color' => $request->color,
            'marca' => $request->marca
        ]);

        // Actualizar o crear el inventario
        $product->inventory()->updateOrCreate(
            ['product_id' => $product->id],
            ['stock' => $request->stock]
        );

        return redirect()->route('dashboard')->with('success', 'Producto actualizado con exito.');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('dashboard')->with('success', 'Producto eliminado con exito.');
    }
}
