@extends('layouts.master')

@section('content')


<div class="container">
    <div class="row pt-4">
        @foreach ($products as $product)
            <div class="col-md-3">
                <div class="card">
                    <img src="{{ asset('storage/' . $product->img) }}" class="card-img-top" style="height: 350px">
                    <div class="card-body">
                        <h5 class="card-title">Name: {{ $product->name }}</h5>
                        <p class="card-text">Description: {{ $product->description }}</p>
                        <h4>Price: {{ $product->price }} €</h4>
                            @if ($cart->where('id', $product->id)->count())
                                <strong>In cart</strong>
                                    <form action="{{ route('cart.remove') }}" method="POST">
                                        {{ method_field('DELETE') }}
                                        @csrf
                                    <input type="hidden" name="product_id" value="{{ $product->id}}">
                                    <button type="submit" class="btn btn-danger">Remove item</button>
                                </form>
                            @else
                            <form action="{{ route('cart.store') }}" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id}}">Quantity:
                                <input type="number" value="1" name="quantity">
                                <button type="submit" class="btn btn-primary">Add to cart</button>
                            </form>
                            @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>


@endsection

