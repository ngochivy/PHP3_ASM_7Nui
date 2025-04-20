<?php

namespace App\Providers;

use App\Models\ProductComparison;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class ProductComparisonService extends ServiceProvider
{

    const MAX_COMPARISON_ITEMS = 4;

    public function __construct()
    {
        // ...
    }
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }

    public function getComparison()
    {
        // Chỉ dùng session_id
        return ProductComparison::firstOrCreate(['session_id' => session()->getId()]);
    }
    
    public function addProduct($productId)
    {
        $comparison = $this->getComparison();
        
        // Kiểm tra số lượng sản phẩm hiện có
        if ($comparison->products()->count() >= self::MAX_COMPARISON_ITEMS) {
            return [
                'success' => false,
                'message' => 'Bạn chỉ có thể so sánh tối đa '.self::MAX_COMPARISON_ITEMS.' sản phẩm'
            ];
        }
        
        if (!$comparison->products()->where('product_id', $productId)->exists()) {
            $comparison->products()->attach($productId);
            return [
                'success' => true,
                'message' => 'Đã thêm sản phẩm vào so sánh',
                'current_count' => $comparison->products()->count()
            ];
        }
        
        return [
            'success' => false,
            'message' => 'Sản phẩm đã có trong danh sách so sánh'
        ];
    }
    
    public function removeProduct($productId)
    {
        $comparison = $this->getComparison();
        $comparison->products()->detach($productId);
    }
    
    public function getProducts()
    {
        return $this->getComparison()->products()->with(['category', 'specifications'])->get();
    }
    
    public function clear()
    {
        $comparison = $this->getComparison();
        $comparison->products()->detach();
    }
}
