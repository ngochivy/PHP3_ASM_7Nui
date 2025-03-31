<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public static function index(){ 
        return view('client.checkout.index');
    }
}
