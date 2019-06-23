@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <form method="POST" action="{{ route('store') }}">
            @csrf

            <label for="product_name">Product name:</label><br>
            <input id="product_name" name="product_name" type="text" value="{{ old('product_name') }}"><br>

            <label for="product_price">Product price:</label><br>
            <input id="product_price" name="product_price" type="number" value="{{ old('product_price') }}"><br>

            <button type="submit" class="btn btn-primary">Add</button>

        </form>
    </div>
</div>
@endsection