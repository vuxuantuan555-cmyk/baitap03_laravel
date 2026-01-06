@extends('layouts.app')

@section('title', 'Liên Hệ')

@section('content')
    <h2 class="text-center mb-4 text-primary">Liên Hệ Với Chúng Tôi</h2>
    
    <div class="row">
        <div class="col-md-6 mb-4">
            <h4 class="text-success">Thông Tin Liên Lạc</h4>
            <p><strong>Địa chỉ:</strong> 123 Đường Sao Băng, Quận 5, TP. ZZZ</p>
            <p><strong>Điện thoại:</strong> (0236) 555-666</p>
            <p><strong>Email:</strong> hello@zzzroastery.com</p>
            <p><strong>Giờ mở cửa:</strong> 8:00 AM - 10:00 PM (Mỗi ngày)</p>
        </div>

        <div class="col-md-6">
            <h4 class="text-success">Gửi Thắc Mắc Cho Chúng Tôi</h4>
            <form action="#" method="POST"> 
                <div class="mb-3">
                    <label for="name" class="form-label">Tên</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Nội dung</label>
                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Gửi</button>
            </form>
        </div>
    </div>
@endsection