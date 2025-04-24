<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Product;
use App\Models\User;
use Closure;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;



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
        $data = ["product" => $product];
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

    


    public function comment(Request $request, $slug)
    {
        try {
            // Tìm sản phẩm từ slug, nếu không tìm thấy sẽ ném ngoại lệ
            $product = Product::where('slug', $slug)->firstOrFail();
    
            // Validate dữ liệu
            $validator = Validator::make($request->all(), [
                'content' => 'required|max:255',
            ], [
                'content.required' => "Vui lòng nhập nội dung",
                'content.max' => "Tối đa 255 ký tự",
            ]);
    
            // Nếu dữ liệu không hợp lệ, quay lại với thông báo lỗi
            if ($validator->fails()) {
                return redirect()
                    ->back()
                    ->withErrors($validator)
                    ->withInput();
            }
    
            // Kiểm tra xem người dùng đã mua sản phẩm này chưa
            // Nếu chưa, trả về thông báo lỗi, có thể kết hợp middleware ở đây
            $user = Auth::user();
            $hasPurchased = DB::table('orders')
                ->join('order_details', 'orders.id', '=', 'order_details.order_id')
                ->where('orders.user_id', $user->id)
                ->where('order_details.product_id', $product->id)
                ->where('orders.status', 'Hoàn thành - Đã nhận hàng')
                ->exists();
    
            if (! $hasPurchased) {
                return redirect()->route('productDetail', $slug)
                    ->with('error', 'Bạn cần mua sản phẩm này để bình luận.');
            }
    
            // Tạo bình luận
            Comment::create([
                'user_id'    => Auth::id(),
                'content'    => $request->content,
                'product_id' => $product->id,
            ]);
    
            // Sau khi tạo bình luận thành công, trả về thông báo thành công
            return redirect()->route('productDetail', $slug)
                ->with('success', 'Bình luận đã được gửi!');
        } catch (\Exception $e) {
            // Nếu có lỗi xảy ra trong quá trình xử lý, trả về thông báo lỗi
            return redirect()->route('productDetail', $slug)
                ->with('error', 'Đã có lỗi xảy ra: ' . $e->getMessage());
        }
    }
    



    public function productDetail($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();

        // Load comments kèm user của mỗi comment
        $comments = $product->comments()
            ->with('user')  //
            ->orderBy('created_at', 'desc')
            ->paginate(5);

        return view('product.detail', compact('product', 'comments'));
    }



    public function delete($id)
    {
        Comment::find($id)->delete();

        return redirect()->back()->with('success', 'Bình luận đã được xóa thành công');
    }
    
}
