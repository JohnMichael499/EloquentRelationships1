<?php

namespace App\Http\Controllers;

use App\Store;
use Illuminate\Http\Request;

class StoresController extends Controller
{
    public function index(){
        $stores = Store::all();
        return view('stores.index', compact('stores'));
    }

    public function create(){
        return view('stores.create');
    }

    
    public function show($storeId){
        $store = Store::find($storeId);
        return view('stores.show', compact('store'));
    }

    
    public function edit($storeId){
        $store = Store::find($storeId);
        return view('stores.edit', compact('store'));
    }

    
    public function store(){

        // Create a new Store
        $validated_fields = request()->validate([
            'name' => 'required',
            'address' => 'required'
        ]);

        $store = Store::create($validated_fields);

        return redirect('/stores');
    }

    public function update(Store $store){
        
        $validated_fields = request()->validate([
            'name' => 'required',
            'address' => 'required'
        ]);

        $store->update($validated_fields);

        return redirect('/stores/'.$store->id);
    }

    public function delete($storeId){
        $store = Store::find($storeId);
        return view('stores.delete', compact('store'));
    }

    public function destroy(Store $store){
        $store->delete();
        return redirect('/stores');
    }
}
