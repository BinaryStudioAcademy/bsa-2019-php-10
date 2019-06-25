@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(count($products))
                            <h5>Your products:</h5>

                        <ul>
                        @foreach($products as $product)

                            <li>
                                <a href="{{ route('show', ['id' => $product->id]) }}">
                                    {{ $product->name }} : {{ $product->price }}
                                </a>
                            </li>

                        @endforeach
                        </ul>

                    @else
                        You dont have any products!
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
