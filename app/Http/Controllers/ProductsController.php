<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('products.products', compact('products'));
    }

    public function create() {
        $products = Product::all();
        return view('products.create', compact('products'));
    }

    public function store(Request $request) {
        Product::create([
            'name' => $request->name,
            'cost' => $request->cost,
            'price' => $request->price,
            'quantity' => $request->quantity,
        ]);

        $products = Product::all();
        return view('products.products', compact('products'));
    }

    public function edit(Request $request) {
        $product = Product::find($request->id);

        return view('products.edit', compact('product'));
    }

    public function update(Request $request) {
        $products = Product::find($request->id);

        $products->update([
            'name' => $request->name,
            'cost' => $request->cost,
            'price' => $request->price,
            'quantity' => $request->quantity,
        ]);

        $products = Product::all();

        return redirect('/');
    }

    public function delete(Request $request) {
        $product = Product::find($request->id);

        return view('products.delete', compact('product'));
    }

    public function destroy(Request $request) {
        $product = Product::find($request->id);
        $product->delete();

        return redirect('/')->with('Sucesso');
    }
}
