@extends('layouts.master')

@section('content')
<div class="container">
    <div class="section">
        <h5>Dashboard</h5>
        <table>
            <tr>
                <th class="center-align">Product ID</th>
                <th class="center-align">Product Name</th>
                <th class="center-align">Store Name</th>
                <th class="center-align">Latest Transaction</th>
                <th class="center-align">Latest Transaction Date</th>
            </tr>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td class="center-align">{{ $product -> id }}
                    </td>
                    <td class="center-align">
                        <a href="/products/{{$product->id}}">{{ $product -> name }}</a>
                    </td>
                    <td class="center-align">
                        <a href="/stores/{{$product->store->id}}">{{ $product->store->name }}</a>
                    </td>
                    @foreach ($product->transactions as $transaction)
                    @if ($loop->last)
                    <td class="center-align">
                        <a href="/transactions/{{$transaction->id}}">{{$transaction->status}}
                        </a>
                    </td>
                    <td class="center-align">{{$transaction->updated_at}}
                    </td>
                    @endif
                    @endforeach
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection