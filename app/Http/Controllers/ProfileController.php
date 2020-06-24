<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    
    public function index(Request $request)
    {
        return view('pages.profile', [
            'user' => $request->user()
        ]);
    }

}
