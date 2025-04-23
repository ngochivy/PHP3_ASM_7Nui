<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\DB;

class OrderDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        "qty",
        "price",
        "total",
        "product_id",
        "order_id",
    ];

    // Mối quan hệ với model Product
    public function productaa(): BelongsTo
    {
        return $this->belongsTo(Product::class,'product_id');
    }

    // Mối quan hệ với model Order
    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    // Truy vấn kết hợp bảng order_details, products và orders
    public static function orderDetailInnerJoinProductAndOrder($id)
    {
        $query = DB::table('order_details')
            ->join('products', 'order_details.product_id', '=', 'products.id')
            ->join('orders', 'order_details.order_id', '=', 'orders.id')
            ->select(
                'order_details.*',
                'products.title as product_title', // Lấy tên sản phẩm
                'products.thumbnail as product_thumbnail', // Lấy thumbnail sản phẩm
                'orders.status as order_status' // Lấy trạng thái đơn hàng
            )
            ->where('order_details.order_id', $id);
        
        // Trả về kết quả truy vấn
        $data = $query->get();
        
        return $data;
    }
}
