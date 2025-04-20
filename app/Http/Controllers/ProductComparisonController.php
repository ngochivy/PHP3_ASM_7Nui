<?php

namespace App\Http\Controllers;

use App\Providers\ProductComparisonService;
use Illuminate\Http\Request;

class ProductComparisonController extends Controller
{
    protected $comparisonService;

    public function __construct(ProductComparisonService $comparisonService)
    {
        $this->comparisonService = $comparisonService;
    }

    // Trong ProductComparisonController
    protected function getComparableAttributes($products)
    {
        if ($products->isEmpty()) return [];

        // Lấy tất cả specifications có trong các sản phẩm
        $allSpecs = [];
        foreach ($products as $product) {
            foreach ($product->specifications as $spec) {
                $allSpecs[$spec->id] = $spec;
            }
        }

        // Tạo mảng kết quả
        $attributes = [];
        foreach ($allSpecs as $specId => $spec) {
            $attributes[$specId] = [
                'name' => $spec->name,
                'unit' => $spec->unit,
                'values' => []
            ];

            foreach ($products as $product) {
                $value = $product->specifications->firstWhere('id', $specId)?->pivot->value ?? 'N/A';
                $attributes[$specId]['values'][$product->id] = $value;
            }
        }

        return $attributes;
    }

    public function index()
    {
        $products = $this->comparisonService->getProducts();
        return view('client.product.compare', [
            'products' => $products,
            'current_count' => $products->count(),
            'max_items' => ProductComparisonService::MAX_COMPARISON_ITEMS
        ]);
    }

    public function add(Request $request, $productId)
    {
        $result = $this->comparisonService->addProduct($productId);
        return redirect()->route('compare.index')->with($result['success'] ? 'success' : 'error', $result['message']);
    }

    public function remove($productId)
    {
        $this->comparisonService->removeProduct($productId);

        return back()->with('success', 'Đã xóa sản phẩm khỏi so sánh');
    }

    public function clear()
    {
        $this->comparisonService->clear();

        return back()->with('success', 'Đã xóa tất cả sản phẩm so sánh');
    }

    /**
     * Lấy các thuộc tính chung để so sánh
     */
    protected function getCommonAttributes($products)
    {
        if ($products->isEmpty()) return [];

        // Lấy các thuộc tính chung của tất cả sản phẩm
        return $products->first()->specifications
            ->filter(function ($spec) use ($products) {
                return $products->every(function ($product) use ($spec) {
                    return $product->specifications->contains('id', $spec->id);
                });
            })
            ->pluck('name', 'id');
    }
}
