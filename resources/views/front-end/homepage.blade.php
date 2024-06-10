@extends('layouts.front')

@section('content')
<div class="row">
    <!-- Sidebar -->
    <div class="col-12 col-md-3 mb-3">
        <ul class="list-group">
            <li class="list-group-item">Computer</li>
            <li class="list-group-item">Gaming</li>
            <li class="list-group-item">Mac-apple</li>
            <li class="list-group-item">Monitor & Display</li>
            <li class="list-group-item">Interactive Display</li>
            <li class="list-group-item">Conference Camera</li>
        </ul>
    </div>

    <!-- Carousel -->
    <div class="col-12 col-md-9 mb-3">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/slide1.jpg') }}" class="d-block w-100 rounded rounded-4" alt="Slide 1">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/slide2.png') }}" class="d-block w-100 rounded rounded-4" alt="Slide 2">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/silde3.jpg') }}" class="d-block w-100 rounded rounded-4" alt="Slide 3">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/silde4.png') }}" class="d-block w-100 rounded rounded-4" alt="Slide 4">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>

<!-- Top 4 Products -->
<div class="row pt-2">
    <div class="col-6 col-md-3 mb-3">
        <img src="{{ asset('images/001.jpg') }}" alt="Product 1" class="img-fluid rounded rounded-4">
    </div>
    <div class="col-6 col-md-3 mb-3">
        <img src="{{ asset('images/001.jpg') }}" alt="Product 2" class="img-fluid rounded rounded-4">
    </div>
    <div class="col-6 col-md-3 mb-3">
        <img src="{{ asset('images/001.jpg') }}" alt="Product 3" class="img-fluid rounded rounded-4">
    </div>
    <div class="col-6 col-md-3 mb-3">
        <img src="{{ asset('images/001.jpg') }}" alt="Product 4" class="img-fluid rounded rounded-4">
    </div>
</div>

<!-- Product Listings -->
<div class="row pt-3">
    @foreach ($products as $product)
        <div class="col-12 col-sm-6 col-md-4 col-lg-2 mb-3">
            <div class="card position-relative">
                <a href="#">
                    <img src="{{ asset('prodIamge/' . $product->image) }}" class="card-img-top" alt="{{ $product->prod_name }}">
                </a>
                <div class="card-body">
                    <h3 class="text-danger fw-bold">${{ $product->prod_price }}</h3>
                    <p class="d-flex justify-content-between">
                        <span>LLSS-1343</span>
                        <span><i class="fa-solid fa-cart-arrow-down"></i></span>
                    </p>
                    <p>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </p>
                    <p class="card-text">{{ $product->prod_name }}</p>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
