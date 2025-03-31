<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'content',
        'price',
        'sale_price',
        'thumbnail',
        'status',
        'category_id',
    ];

    public function category(): BelongsTo
    {
        // Cách tạo Category -> php artisan make:model Category
        // belongsTo là sp này thuộc về danh mục nào
        return $this->belongsTo(Category::class); 
    }
}
