<?php

namespace App\Http\Controllers;

use App\Product;
use App\Transaction;
use Illuminate\Http\Request;

class TransactionsController extends Controller
{
    public function index(){
        $transactions = Transaction::all();
        return view('transactions.index', compact('transactions'));
    }

    public function create(){
        $products = Product::all();
        return view('transactions.create', compact('products'));
    }

    
    public function show($transactionId){
        $transaction = Transaction::find($transactionId);
        return view('transactions.show', compact('transaction'));
    }

    
    public function edit($transactionId){
        $products = Product::all();
        $transaction = Transaction::find($transactionId);
        return view('transactions.edit', compact('products', 'transaction'));
    }

    
    public function store(){

        // Create a new Transaction
        $validated_fields = request()->validate([
            'status' => 'required',
            'quantity' => 'required',
            'product_id' => 'required'
        ]);

        $transaction = Transaction::create($validated_fields);

        return redirect('/transactions');
    }

    public function update(Transaction $transaction){
        
        $validated_fields = request()->validate([
            'status' => 'required',
            'quantity' => 'required',
            'product_id' => 'required'
        ]);

        $transaction->update($validated_fields);

        return redirect('/transactions/'.$transaction->id);
    }

    public function delete($transactionId){
        $transaction = Transaction::find($transactionId);
        return view('transactions.delete', compact('transaction'));
    }

    public function destroy(Transaction $transaction){
        $transaction->delete();
        return redirect('/transactions');
    }
}
