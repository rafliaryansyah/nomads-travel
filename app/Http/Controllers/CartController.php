<?php

namespace App\Http\Controllers;

use App\Transaction;
use Illuminate\Http\Request;

class CartController extends Controller
{
    
    public function index(Request $request)
    {
        $items = Transaction::all();
        // dump($items);
        return view('pages.cart', compact('items'));
    }

}
