<?php

namespace App\Http\Controllers;

use App\TravelPackage;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index(Request $request, $slug)
    {
        $item = TravelPackage::with(['galleries'])->where(compact('slug'))->firstOrFail();
        return view('pages.detail', compact('item'));
    }
}
