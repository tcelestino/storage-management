@extends('layout/main')

@section('content')
    <h2>Products list</h2>
    @if(empty($products))
        <p>There aren't products</p>
        <p><a href="{{ action('ProductsController@new') }}">Add new</a></p>
    @else
        @if(old('name'))
            <p class="alert alert-success">Product <strong>{{ old('name') }}</strong> added successfully</p>
        @endif
        <table class='table table-bordered table-striped'>
            <thead>
                <tr>
                    <td>Id</td>
                    <td>Name</td>
                    <td>Description</td>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->description }}</td>
                        <td><a href='products/details/{{ $product->id }}'>View details</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@stop
