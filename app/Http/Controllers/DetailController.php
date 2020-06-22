<?php

namespace App\Http\Controllers;

use App\Comment;
use App\TravelPackage;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index(Request $request, $slug)
    {
        $item = TravelPackage::with(['galleries', 'details', 'comment'])->where(compact('slug'))->firstOrFail();
        return view('pages.detail', compact('item'));
    }

    // public function comment(Request $request)
    // {
        
    // }

}
