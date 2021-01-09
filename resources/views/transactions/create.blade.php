@extends('layouts.master')

@section('content')
<div class="container">
    <div class="section">
        <h5>Create Transaction</h5>
        <div class="row"></div>
        <div class="row">
            <form class="col s12" action="/transactions" method="POST">
                @csrf
                <div class="row">
                    <div class="row">
                        <div class="input-field col s12">
                            <select id="status" name="status" required>
                                <option value="Coming In">Coming In</option>
                                <option value="Going Out">Going Out</option>
                            </select>
                            <label>Status:</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input required id="quantity" type="number" class="validate" name="quantity">
                            <label for="quantity">Quantity</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <select id="products" name="product_id" required>
                                @foreach ($products as $product)
                                <option value="{{$product->id}}">{{$product->name}}</option>
                                @endforeach
                            </select>
                            <label>Product:</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field">
                            <button class="btn waves-effect waves-light teal darken-3" type="submit"
                                name="action">Create
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