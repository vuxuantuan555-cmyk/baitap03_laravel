<?php
// app/Http/Controllers/PageController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Dữ liệu Món nước (Đã điều chỉnh để Macchiato dùng file colombia.jpg)
    private $drinks = [
        ['id' => 1, 'name' => 'Tinh Vân Latte', 'price' => 55000, 'description' => 'Latte ngọt ngào với lớp bọt sữa mịn như mây.', 'image' => 'images/americano.jpg.jpg'],
        ['id' => 2, 'name' => 'Hố Đen Americano', 'price' => 45000, 'description' => 'Americano đậm đà, mạnh mẽ đánh thức mọi giác quan.', 'image' => 'images/americano.jpg.jpg'],
        ['id' => 3, 'name' => 'Vũ Trụ Cold Brew', 'price' => 60000, 'description' => 'Cold brew ủ lạnh 24 giờ, mang hương vị của cả vũ trụ.', 'image' => 'images/coldbrew.jpg.jpg'],
        // ĐÃ SỬA: Dùng file 'colombia.jpg' cho Macchiato (vì đây là ảnh cốc pha sẵn)
        ['id' => 4, 'name' => 'Dải Ngân Hà Macchiato', 'price' => 58000, 'description' => 'Sự kết hợp hoàn hảo giữa espresso và vệt sữa trắng.', 'image' => 'images/colombia.jpg.jpg'], 
    ];

    // Dữ liệu Hạt cà phê (Đã điều chỉnh để Colombia dùng file macchiato.jpg)
    private $beans = [
        ['id' => 1, 'name' => 'Hạt Sao Chổi (Ethiopia)', 'origin' => 'Yirgacheffe, Ethiopia', 'notes' => 'Hương hoa nhài, vị chua thanh của quả mọng.', 'image' => 'images/ethiopia.jpg.jpg'],
        // ĐÃ SỬA: Dùng file 'macchiato.jpg' cho Hạt Colombia (vì đây là ảnh hạt cà phê)
        ['id' => 2, 'name' => 'Hạt Thiên Thạch (Colombia)', 'origin' => 'Huila, Colombia', 'notes' => 'Vị ngọt caramel, sô cô la và một chút hương cam.', 'image' => 'images/macchiato.jpg.jpg'], 
    ];
    
    // ... (Các phương thức khác) ...
    public function home()
    {
        $featuredDrinks = array_slice($this->drinks, 0, 3);
        return view('home', compact('featuredDrinks'));
    }
    public function about() { return view('about'); }
    public function menu() { return view('menu', ['drinks' => $this->drinks]); }
    public function beansStory() { return view('beans-story', ['beans' => $this->beans]); }
    public function contact() { return view('contact'); }
}