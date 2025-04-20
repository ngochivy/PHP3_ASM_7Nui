<?php

// app/Models/Specification.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Specification extends Model
{
    protected $fillable = ['name', 'unit']; // Thêm các trường cần thiết
    
    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'product_specification')
                   ->withPivot('value');
    }
}
