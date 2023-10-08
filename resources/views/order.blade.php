@extends('layouts.master')

@section('content')

<div class="container pt-4">
   <h4>Welcome : {{ Auth::user()->name }} - {{ Auth::user()->email}}</h4>
  @foreach ($orders as $order)
    <table class="table table-active mt-6"  style="background-color:white">
      <thead>
        <tr>
          <th scope="col">Order ID</th>
          <th scope="col">Product name</th>
          <th scope="col">Quantity</th>
          <th scope="col">Price</th>
          <th scope="col">Date</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($order->products as $product)
            <tr>
              <th scope="row">{{ $order->id }}</th>
              <td>{{ $product->name }}</td>
              <td>{{ $product->pivot->quantity }}</td>
              <td>{{ $product->price }} €</td>
              <td>{{ $product->pivot->created_at }}</td>
            </tr>
        @endforeach
      </tbody>
    </table>
    TOTAL: {{$order->total}} €
    @endforeach
</div>

@endsection