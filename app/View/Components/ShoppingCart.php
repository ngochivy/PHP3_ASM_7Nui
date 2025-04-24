<?php

namespace App\View\Components;

use App\Models\Cart;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;

class ShoppingCart extends Component
{
    public $userId;

    public function __construct($userId = null)
    {
        $this->userId = $userId ?? optional(Auth::user())->id;
    }

    public function render()
    {
        $carts = $this->userId 
            ? Cart::with('product')->where('user_id', $this->userId)->get()
            : collect();
    
        return view('components.shopping-cart', ['cart' => $carts]);
    }
}
