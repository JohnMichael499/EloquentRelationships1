@extends('layouts.master')

@section('content')
<div class="container">
    <div class="section">
        <h5>Stores</h5>
        <a href="/stores/create">Create Store</a>
        <table>
            <tr>
                <th class="center-align">ID</th>
                <th class="center-align">Store Name</th>
                <th class="center-align">Store Address</th>
                <th class="center-align">Actions</th>
            </tr>
            <tbody>
                @foreach ($stores as $store)
                <tr>
                    <td class="center-align">{{$store->id}}</td>
                    <td class="center-align">
                        <a href="/stores/{{$store->id}}">{{ $store -> name }}</a>
                    </td>
                    <td class="center-align">
                        {{ $store -> address }}
                    </td>
                    <td class="center-align">
                        <a href="/stores/{{$store->id}}/edit">Edit</a> |
                        <a href="/stores/{{$store->id}}/delete">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection