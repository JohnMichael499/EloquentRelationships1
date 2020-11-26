@extends('layouts.master')

@section('content')
<div class="container">
    <div class="section">
        <div class="row">
            <div class="col s12">
                <div class="card darken-1">
                    <div class="card-content">
                        <span class="card-title">Transaction Status: {{ $transaction -> status }}</span>
                        <h6 style="margin-left: 1em">Quantity:</h6>
                        <p style="margin-left: 2em">{{ $transaction -> quantity }}</p>
                        <h6 style="margin-left: 1em">Transaction Date:</h6>
                        <p style="margin-left: 2em">{{ $transaction -> updated_at }}</p>
                        <br>
                    </div>
                    <div class="card-action teal darken-3">
                        <a class="teal-text text-lighten-5" href="/transactions/{{$transaction->id}}/edit">Edit</a>
                        <a class="teal-text text-lighten-5" href="/transactions/{{$transaction->id}}/delete">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection