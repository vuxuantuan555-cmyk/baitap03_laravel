@extends('layouts.app')

@section('title', 'Câu chuyện Hạt cà phê')

@section('content')
    <h2 class="text-center mb-5 text-success">Câu Chuyện Các Loại Hạt Cà Phê Đặc Biệt</h2>
    
    @foreach ($beans as $bean)
        <div class="row mb-5 align-items-center border-bottom pb-4">
            <div class="col-md-5">
                <img src="{{ asset($bean['image']) }}" class="img-fluid rounded shadow" alt="{{ $bean['name'] }}" style="max-height: 300px; object-fit: cover;">
            </div>
            
            <div class="col-md-7">
                <h3 class="text-primary">{{ $bean['name'] }}</h3>
                <p class="lead"><strong>Nguồn gốc:</strong> {{ $bean['origin'] }}</p>
                <p><strong>Ghi chú hương vị:</strong> ☕ {{ $bean['notes'] }}</p>
                </div>
        </div>
    @endforeach
@endsection