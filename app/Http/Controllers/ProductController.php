<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $sort = $request->get('sort', 'default');
        $products = Product::query();

        // Áp dụng sắp xếp
        switch ($sort) {
            case 'newest':
                $products->orderBy('created_at', 'desc');
                break;
            case 'oldest':
                $products->orderBy('created_at', 'asc');
                break;
            case 'price_desc':
                $products->orderBy('price', 'desc');
                break;
            case 'price_asc':
                $products->orderBy('price', 'asc');
                break;
            default:
                $products->orderBy('id', 'desc');
        }

        return view('client.product.index', [
            'products' => $products->paginate(9),
            'category' => Category::withCount('products')->get(),
            'currentSort' => $sort
        ]);
    }
    public static function detail($slug)
    {
        $product = Product::where('slug', $slug)->first();
        $data = ["product"=>$product]; 
        return view('client.product.detail', $data);
    }

    public function search(Request $request)
{

    $query = $request->input('query');

  
    $products = Product::where(function ($queryBuilder) use ($query) {
        $queryBuilder->where('title', 'LIKE', "%{$query}%")
                     ->orWhere('description', 'LIKE', "%{$query}%");
    })->get();

    $category = Category::all();

    return view('client.product.index', compact('products', 'category'));
}



    
    
    


    

    public function productsByCategory(Request $request, $id)
    {
        $sort = $request->get('sort', 'default');
        $currentCategory = Category::withCount('products')->findOrFail($id);

        $products = Product::where('category_id', $id);

        // Áp dụng sắp xếp tương tự
        switch ($sort) {
            case 'newest':
                $products->orderBy('created_at', 'desc');
                break;
                // ... các case khác giống trên
        }

        return view('client.product.index', [
            'products' => $products->paginate(9),
            'category' => Category::withCount('products')->get(),
            'currentCategory' => $currentCategory,
            'currentSort' => $sort
        ]);
    }
}
