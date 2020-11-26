@extends('layouts.master')

@section('content')
<div class="container">
    <div class="section">
        <div class="row">
            <div class="col s12">
                <div class="card darken-1">
                    <div class="card-content">
                        <span class="card-title">{{ $store -> name }}</span>
                        <h6 style="margin-left: 1em">Address:</h6>
                        <p style="margin-left: 2em">{{ $store -> address }}</p>
                        <br>
                        <h6>Products:</h6>
                        <table>
                            <thead>
                                <tr>
                                    <th class="center-align">ID</th>
                                    <th class="center-align">Name</th>
                                    <th class="center-align">Image</th>
                                    <th class="center-align">Actions</th>
                                </tr>
                            </thead>
                            @foreach($store->products as $product)
                            <tr>
                                <td class="center-align">{{$product->id}}</td>
                                <td class="center-align"><a href="/products/{{$product->id}}">{{$product->name}}</a>
                                </td>
                                <td class="center-align"><img src="{{$product->image}}" width="100px" height="100px">
                                </td>
                                <td class="center-align">
                                    <a href="/products/{{$product->id}}/edit">Edit</a>
                                    | <a href="/products/{{$product->id}}/delete">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                    <div class="card-action teal darken-3">
                        <a class="teal-text text-lighten-5" href="/stores/{{$store->id}}/edit">Edit</a>
                        <a class="teal-text text-lighten-5" href="/stores/{{$store->id}}/delete">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection