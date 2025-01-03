<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function cart()
    {
        $cart = json_decode(request()->cookie('cart'), true) ?? [];
        return view('cart.index', compact('cart'));
    }


    public function women()
    {
        return view('women');
    }


    public function men()
    {
        return view('men');
    }


    public function addToCart(Request $request)
    {

        $cart = json_decode(request()->cookie('cart'), true) ?? [];

        $cart[] = [
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'quantity' => $request->input('quantity'),
            'image' => $request->input('image')
        ];


        $minutes = 60;
        cookie()->queue('cart', json_encode($cart), $minutes);


        return redirect()->route('cart.page');
    }

}
