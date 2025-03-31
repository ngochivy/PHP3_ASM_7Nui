<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function account(){
        return view('client.auth.account');
    }

    public function profile(){
        return view('client.auth.profile');
    }
}
