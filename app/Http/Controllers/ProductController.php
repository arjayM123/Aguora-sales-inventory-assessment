<?php

namespace App\Http\Controllers;

use App\Models\Category;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
public function index()
{
    $products = Product::all();

    return view(
        'products.index',
        compact('products')
    );
}

    /**
     * Show the form for creating a new resource.
     */
public function create()
{
    $categories = Category::all();

    return view('products.create', compact('categories'));
}

    /**
     * Store a newly created resource in storage.
     */
public function store(Request $request)
{
    $photoPath = null;

    if ($request->hasFile('photo')) {

        $photoPath = $request
            ->file('photo')
            ->store('products', 'public');

    }

    Product::create([

        'sku' => $request->sku,

        'name' => $request->name,

        'category_id' => $request->category,

        'stock' => $request->stock,

        'low_stock_alert' => $request->low_stock,

        'price' => $request->price,

        'cost' => $request->cost,

        'photo' => $photoPath,

        'status' => $request->status,

    ]);

    return redirect('/products');
}
public function edit(Product $product)
{
    $categories = Category::all();

    return view(
        'products.edit',
        compact('product', 'categories')
    );
}

    /**
     * Update the specified resource in storage.
     */
public function update(Request $request, Product $product)
{
    $photoPath = $product->photo;

    if ($request->hasFile('photo')) {

        $photoPath = $request
            ->file('photo')
            ->store('products', 'public');

    }

    $product->update([

        'sku' => $request->sku,

        'name' => $request->name,

        'category_id' => $request->category,

        'stock' => $request->stock,

        'low_stock_alert' => $request->low_stock,

        'price' => $request->price,

        'cost' => $request->cost,

        'photo' => $photoPath,



        'status' => $request->status,

    ]);

    return redirect('/products');
}
public function destroy(Product $product)
{
    $product->delete();

    return redirect('/products');
}
}
