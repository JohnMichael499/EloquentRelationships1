@extends('layouts.master')

@section('content')
<div class="container">
    <div class="section">
        <div class="row">
            <div class="col s12">
                <div class="card">
                    <div class="card-image">
                        <img src="{{ $product -> image }}" width="300px">
                        <span class="card-title">{{ $product -> name }}</span>
                    </div>
                    <div class="card-content">
                        <h6>Transactions:</h6>
                        <table>
                            <thead>
                                <tr>
                                    <th class="center-align">ID</th>
                                    <th class="center-align">Status</th>
                                    <th class="center-align">Quantity</th>
                                    <th class="center-align">Date And Time</th>
                                    <th class="center-align">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($product->transactions as $transaction)
                                <tr>
                                    <td class="center-align">{{$transaction->id}}</td>
                                    <td class="center-align"><a
                                            href="/transactions/{{$transaction->id}}">{{$transaction->status}}</a></td>
                                    <td class="center-align">{{$transaction->quantity}}</td>
                                    <td class="center-align">{{$transaction->updated_at}}</td>
                                    <td class="center-align">
                                        <a href="/transactions/{{$transaction->id}}/edit">Edit</a>
                                        | <a href="/transactions/{{$transaction->id}}/delete">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-action teal darken-3">
                        <a class="teal-text text-lighten-5" href="/products/{{$product->id}}/edit">Edit</a>
                        <a class="teal-text text-lighten-5" href="/products/{{$product->id}}/delete">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection