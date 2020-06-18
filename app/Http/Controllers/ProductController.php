<?php

namespace App\Http\Controllers;

use App\Category;
use App\TravelPackage;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $items = TravelPackage::latest()->paginate(8);
        
        return view('pages.products.product', compact('items', 'categories'));
    }

    public function category(Category $category)
    {
        
        $categories = Category::all();

        $items = $category->travel_package()->paginate(8);

        return view('pages.products.product', compact('categories', 'items'));
    }
}