@extends('layouts.master')

@section('content')
<div class="container">
    <div class="section">
        <h5>Products</h5>
        <a href="/products/create">Create Product</a>
        <table>
            <tr>
                <th class="center-align">Product Name</th>
                <th class="center-align">Product Image</th>
                <th class="center-align">Actions</th>
            </tr>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td class="center-align">
                        <a href="/products/{{$product->id}}">{{ $product -> name }}</a>
                    </td>
                    <td class="center-align">
                        <img src="{{ $product->image }}" width="110px" height="100px">
                    </td>
                    <td class="center-align">
                        <a href="/products/{{$product->id}}/edit">Edit</a> |
                        <a href="/products/{{$product->id}}/delete">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection