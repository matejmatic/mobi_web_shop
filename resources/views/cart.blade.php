@extends('layouts.master')

@section('content')

<div class="container pt-4" style="width:40%">
    <ul class="list-group">
        @foreach ($carts as $cart)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $cart->name }} - {{ $cart->price }} €
                <span class="badge bg-primary rounded-pill">{{ $cart->qty }}</span>
            </li>
        @endforeach
    </ul>
    <hr>
    Total: {{ Gloudemans\Shoppingcart\Facades\Cart::subtotal() }} €

    <hr>
    @auth
    @if (Gloudemans\Shoppingcart\Facades\Cart::subtotal() > 1)
        <a href="{{ route('checkout') }}" class="btn btn-primary">Checkout</a>
    @else
        <button type="button" class="btn btn-danger disabled">Your basket is empty</button>
    @endif
    @endauth
    @guest
    <a href="{{ route('login') }}" class="btn btn-primary">Sign in</a>
    @endguest

</div>

@endsection
