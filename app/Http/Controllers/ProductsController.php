<?php

namespace App\Http\Controllers;

use App\Product;
use App\Store;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create(){
        $stores = Store::all();
        return view('products.create', compact('stores'));
    }

    
    public function show($productId){
        $product = Product::find($productId);
        return view('products.show', compact('product', 'transaction'));
    }

    
    public function edit($productId){
        $product = Product::find($productId);
        $stores = Store::all();
        return view('products.edit', compact('stores', 'product'));
    }

    
    public function store(){

        // Create a new Product
        $validated_fields = request()->validate([
            'name' => 'required',
            'image' => 'required',
            'store_id' => 'required'
        ]);

        $product = Product::create($validated_fields);

        return redirect('/products');
    }

    public function update(Product $product){
        
        $validated_fields = request()->validate([
            'name' => 'required',
            'image' => 'required',
            'store_id' => 'required'
        ]);

        $product->update($validated_fields);

        return redirect('/products/'.$product->id);
    }

    public function delete($productId){
        $product = Product::find($productId);
        return view('products.delete', compact('product'));
    }

    public function destroy(Product $product){
        $product->delete();
        return redirect('/products');
    }
}
