@extends('layout/main')

@section('content')
    <h2>Add new Product</h2>
    <form action="/products/added" method="POST">
        <fieldset>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" id="description" class="form-control" rows="10" required></textarea>
            </div>
            <button type="submit" class="btn btn-default">Save</button>
        </fieldset>
    </form>

@stop
