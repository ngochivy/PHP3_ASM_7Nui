<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\DB;
use PHPUnit\Metadata\Before;

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

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    public static function orderDetailInnerJoinProductAndOrder($id)
    {
        $query = DB::table('order_details')
            ->join('products', 'order_details.product_id', '=', 'products.id')
            ->join('orders', 'order_details.order_id', '=', 'orders.id')
            ->select('order_details.*','products.title','products.thumbnail','orders.status')
            ->where('order_details.order_id', $id);
        $data = $query->get();
        // dd($data);  
        return $data;
    }
}
