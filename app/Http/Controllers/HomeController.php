<?php

namespace App\Http\Controllers;

use App\Comment;
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
        $items = TravelPackage::with(['galleries', 'comment'])->take(3)->get();
        $comments = Comment::all()->take(3);
        // dump($items);
        return view('pages.home', [
            'items' => $items,
            'comments' => $comments,
            'user' => User::count()
        ]);
    }
}
