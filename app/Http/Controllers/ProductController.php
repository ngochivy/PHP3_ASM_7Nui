<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public static function index(){ 
        $products = Product::all();
        return view('client.product.index', ['products' => $products]);
    }

    public static function detail($slug)
    { 
        $product = Product::where('slug', $slug)->first(); // Tìm kiếm theo slug -> tạo 1 cái biến = Model Product:: trỏ đến slug -> và lấy giá trị đầu tiên
        $data = ["product"=>$product]; 
        return view('client.product.detail', $data);
    }


}
