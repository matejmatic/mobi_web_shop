@extends('layouts.master')

@section('content')

<div class="row pt-4" style="width: 90%; margin:auto">
    <div class="col-md-2 px-2">
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active disabled" aria-current="true">
                Categories
            </a>
            @foreach ($categories as $category)
                <a href="{{ route('products.category.id', $category->id) }}" class="list-group-item list-group-item-action">{{ $category->name }}</a>
            @endforeach
        </div>
    </div>
    <div class="col-md-8">
        <img src="https://lh3.googleusercontent.com/p/AF1QipOkuUXjoFY0j4abRMX8nD9DKM6y-xacgpiBKdJP=w1080-h608-p-no-v0" width="100%" height="500px">
        <!--<img src="{{ asset('storage/image_1.png') }}" width="100%" height="500px"> -->
    </div>
    <div class="col-md-2">
        <div class="px-2">
            <h3><i>Welcome to our website: mobi.com</i> </h3>
            <hr>
            <h4><i>Address: London </i></h4>
            <hr>
            <h4><i>Contact: 063-456-789</i></h4>
            <hr>
        </div>
    </div>
</div>

<div class="row pt-4" style="width: 90%; margin:auto">
    <div class="col-md-4">
        <img src="https://img.freepik.com/premium-vector/hand-holding-mobile-smart-phone-with-shop-app-fashion-items-online-shopping-concept_3482-7693.jpg" width="100%" height="250px">
    </div>
    <div class="col-md-4">
        <img src="https://www.aarki.com/hubfs/PILLAR-PAGE-PROGRAMMATIC.png" width="100%" height="250px">
    </div>
    <div class="col-md-4">
        <img src="https://img.freepik.com/premium-vector/hand-holding-mobile-smart-phone-with-shop-app-fashion-items-online-shopping-concept_3482-7693.jpg" width="100%"  height="250px">
    
    </div>
</div>


@endsection
