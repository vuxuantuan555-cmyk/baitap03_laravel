// routes/web.php
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController; // BẮT BUỘC Import Controller

// Route Trang Chủ (/)
Route::get('/', [PageController::class, 'home'])->name('home'); 

// Route Giới Thiệu (/about)
Route::get('/about', [PageController::class, 'about'])->name('about');

// Route Thực Đơn (/menu)
Route::get('/menu', [PageController::class, 'menu'])->name('menu');

// Route Câu chuyện Hạt cà phê (/beans-story)
Route::get('/beans-story', [PageController::class, 'beansStory'])->name('beans.story');

// Route Liên Hệ (/contact)
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Lưu ý: Đã dùng Controller cho mọi route.