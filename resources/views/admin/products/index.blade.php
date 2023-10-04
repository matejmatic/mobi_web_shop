@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <a href="{{ route('admin.products.create') }}" class="btn btn-primary float-right ml-3 mb-2">Add a new product</a>
        <div class="col-md-12">
            <div class="row">
                @foreach ($products as $product)
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('storage/' . $product->img) }}" class="card-img-top" style="height: 350px">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->description }}</p>
                            <h5 class="card-title">{{ $product->price }} €</h5>

                            <div class="row">
                                <div class="col-md-6">
                                    <a href="{{ route('admin.products.edit', $product->id) }}" class="w-100 btn btn-warning">Edit</a>
                                </div>
                                <div class="col-md-6">
                                    <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <button type="submit" onclick="return confirm('Are you sure?');" class="w-100 btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>


       
    </div>
</div>
@endsection
