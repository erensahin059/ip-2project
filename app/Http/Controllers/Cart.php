<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function cart()
    {
        $cart = json_decode(request()->cookie('cart'), true) ?? [];  // Sepet cookie'sinden veriyi alıyoruz
        return view('cart.index', compact('cart'));  // cart.index view'ına sepet verisini gönderiyoruz
    }


    public function women()
    {
        return view('women');
    }


    public function men()
    {
        return view('men');
    }
    public function index()
    {

        return view('cart.index');
    }
}
