<?php 
namespace App\Models; 
use Illuminate\Database\Eloquent\Factories\HasFactory; 
use Illuminate\Database\Eloquent\Model; 
use Illuminate\Database\Eloquent\Relations\BelongsTo; 
class Blog extends Model { 
    /** @use HasFactory<\Database\Factories\BlogFactory> */ 
    use HasFactory; 
    protected $fillable = [ 
        'title', 
        'content', 
        'image', 
        'status', 
        'user_id', 
    ]; 
    public function user(): BelongsTo { 
        return $this->belongsTo(User::class); 
    } 
}
