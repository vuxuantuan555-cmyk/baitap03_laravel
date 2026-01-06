@extends('layouts.app')

@section('title', 'Trang Chủ')

@section('content')
    <div class="jumbotron text-center bg-light p-5 mb-5 rounded">
        <h1 class="display-4">Chào mừng đến với ZZZ Roastery Coffee</h1>
        <p class="lead">Nơi hương vị vũ trụ đánh thức đam mê cà phê của bạn.</p>
    </div>

    <h2 class="text-center mb-4">Món Nước Nổi Bật</h2>
    <div class="row">
        @foreach ($featuredDrinks as $drink)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset($drink['image']) }}" class="card-img-top" alt="{{ $drink['name'] }}">
                    <div class="card-body">
                        <h5 class="card-title text-center">{{ $drink['name'] }}</h5>
                        <p class="card-text text-center text-danger fw-bold">{{ number_format($drink['price']) }} VNĐ</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection