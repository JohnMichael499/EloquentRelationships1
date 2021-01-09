@extends('layouts.master')

@section('content')
<div class="container">
    <div class="section">
        <h5>Edit Product</h5>
        <div class="row"></div>
        <div class="row">
            <form class="col s12" action="/products/{{$product->id}}" method="POST">
                @method('PUT')
                @csrf
                <div class="row">
                    <div class="input-field col s12">
                        <input placeholder="Placeholder" id="name" type="text" class="validate" name="name"
                            value="{{$product->name}}">
                        <label for="name">Name</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="image" type="text" class="validate" name="image" value="{{$product->image}}">
                        <label for="image">Image URL</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <select id="store" name="store_id" value="{{$product->store_id}}" required>
                            @foreach ($stores as $store)
                            <option value="{{$store->id}}">{{$store->name}}</option>
                            @endforeach
                        </select>
                        <label>Store:</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field">
                        <button class="btn waves-effect waves-light teal darken-3" type="submit" name="action">Update
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection