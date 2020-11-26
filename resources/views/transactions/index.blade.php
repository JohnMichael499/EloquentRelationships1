@extends('layouts.master')

@section('content')
<div class="container">
    <div class="section">
        <h5>Transactions</h5>
        <a href="/transactions/create">Create Transaction</a>
        <table>
            <tr>
                <th class="center-align">ID</th>
                <th class="center-align">Transaction Status</th>
                <th class="center-align">Quantity</th>
                <th class="center-align">Date</th>
                <th class="center-align">Actions</th>
            </tr>
            <tbody>
                @foreach ($transactions as $transaction)
                <tr>
                    <td class="center-align">
                        {{ $transaction -> id }}
                    </td>
                    <td class="center-align">
                        <a href="/transactions/{{$transaction->id}}">{{ $transaction -> status }}</a>
                    </td>
                    <td class="center-align">
                        {{ $transaction -> quantity }}
                    </td>
                    <td class="center-align">
                        {{ $transaction -> updated_at }}
                    </td>
                    <td class="center-align">
                        <a href="/transactions/{{$transaction->id}}/edit">Edit</a> |
                        <a href="/transactions/{{$transaction->id}}/delete">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection