<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public static function index(){ 
        return view('client.contact.index');
    }
}
