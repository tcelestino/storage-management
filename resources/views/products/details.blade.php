@extends('layout/main')

@section('content')
    <section class='container'>
        <article>
            <h2>{{ $product->name }}</h2>
            <p>{{ $product->description }}</p>
        </article>
    </section>
@stop

