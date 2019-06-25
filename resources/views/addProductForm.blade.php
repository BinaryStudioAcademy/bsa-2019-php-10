@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <form method="POST" action="{{ route('store') }}">
        @csrf

        <label for="product_name">Product name:</label><br>
        <input id="product_name" name="product_name" type="text" value="{{ old('product_name') }}" required><br>

        <br/>

        <label for="product_price">Product price:</label><br>
        <input id="product_price" name="product_price" type="number" step="0.01" min="0" value="{{ old('product_price') }}" required><br>

        <hr/>

        <div style="text-align: center">
            <button type="submit" class="btn btn-primary">Add</button>
        </div>

    </form>
</div>
@endsection