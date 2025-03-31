<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public static function index(){ 
        return view('client.about.index');
    }
}
