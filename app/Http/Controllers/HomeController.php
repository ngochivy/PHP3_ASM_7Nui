<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public static function index(){ 
        $category = Category::all();
        $product = Product::all();
        $blog = Blog::take(3)->get();

        return view('client.home', ['category' => $category, 'product'=>$product, 'blog'=>$blog]);
    }

    
    
}
