<?php

namespace App\Http\Controllers;

use App\TravelPackage;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $items = TravelPackage::with(['galleries'])->take(3)->get();
        return view('pages.home', [
            'items' => $items,
            'user' => User::count()
        ]);
    }
}
