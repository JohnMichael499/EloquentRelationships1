@extends('layouts.master')

@section('content')
<div class="container">
    <div class="section">
        <h5>Edit Transaction</h5>
        <div class="row"></div>
        <div class="row">
            <form class="col s12" action="/transactions/{{$transaction->id}}" method="POST">
                @method('PUT')
                @csrf
                <div class="row">
                    <div class="row">
                        <div class="input-field col s12">
                            <select id="status" name="status" value="{{$transaction->status}}" required>
                                <option value="Coming In">Coming In</option>
                                <option value="Going Out">Going Out</option>
                            </select>
                            <label>Status:</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input required id="quantity" type="number" class="validate" name="quantity"
                                value="{{$transaction->quantity}}">
                            <label for="quantity">Quantity</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <select id="products" name="product_id" required value="{{$transaction->product_id}}">
                                @foreach ($products as $product)
                                <option value="{{$product->id}}">{{$product->name}}</option>
                                @endforeach
                            </select>
                            <label>Product:</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field">
                            <button class="btn waves-effect waves-light pink darken-3" type="submit"
                                name="action">Update
                                <i class="material-icons right">send</i>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection