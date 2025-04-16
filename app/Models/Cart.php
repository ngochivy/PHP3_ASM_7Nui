<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\DB;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'product_id',
        'qty',
    ];

    /**
     * Quan hệ với bảng User
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Quan hệ với bảng Product
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public static function cartInnerJoinProduct()
    {
        $carts = DB::table('carts')
            ->join('products', 'carts.product_id', '=', 'products.id')
            ->join('users', 'carts.user_id', '=', 'users.id')
            ->select('carts.id','carts.qty', 'carts.product_id', 
                    'products.slug', 'products.title', 
                    'products.thumbnail', 'products.price',
                    'products.sale_price', 'users.name'
                );
        
        $data = $carts->get();
        // dd($data); 
        return $data;
    }
}
