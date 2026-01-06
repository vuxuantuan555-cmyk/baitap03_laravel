@extends('layouts.app') 

@section('title', 'Thực Đơn')

@section('content')
    <h2 class="text-center mb-4 text-success">Thực Đơn Đồ Uống Của ZZZ Roastery</h2>
    <div class="row">
        @foreach ($drinks as $drink)
            <div class="col-md-6 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset($drink['image']) }}" class="card-img-top" alt="{{ $drink['name'] }}" style="height: 250px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title text-primary">{{ $drink['name'] }}</h5>
                        <p class="card-text text-danger fw-bold">{{ number_format($drink['price'], 0, ',', '.') }} VNĐ</p>
                        <p class="card-text text-muted">{{ $drink['description'] }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection