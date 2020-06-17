<?php

namespace App\Http\Controllers;
use App\TravelPackage;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $item = TravelPackage::with(['galleries'])->firstOrFail();
        $items = TravelPackage::with(['galleries'])->get();
        return view('pages.products', compact('item', 'items'));
    }
}