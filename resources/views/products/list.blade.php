@extends('layout/main')

@section('content')
    <h1>Products list</h1>
    @if(empty($products))
        <p>Not found product</p>
    @else
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
