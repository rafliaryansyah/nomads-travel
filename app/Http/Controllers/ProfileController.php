<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    
    public function index()
    {
        $user = User::firstOrFail();
        return view('pages.profile', compact('user'));
    }

}
