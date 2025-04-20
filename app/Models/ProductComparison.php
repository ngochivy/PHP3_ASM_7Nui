<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// app/Models/ProductComparison.php
class ProductComparison extends Model
{
    protected $fillable = ['session_id'];

    // app/Models/ProductComparison.php
    public function items()
    {
        return $this->hasMany(ProductComparisonItem::class, 'comparison_id'); // Chỉ rõ khóa ngoại
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_comparison_items', 'comparison_id', 'product_id')
            ->withTimestamps();
    }
}

// app/Models/ProductComparisonItem.php
class ProductComparisonItem extends Model
{
    protected $fillable = ['comparison_id', 'product_id'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
