<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateProfileRequest;

class ProfileController extends Controller
{
    
    public function index(Request $request)
    {
        return view('pages.profile', [
            'user' => $request->user()
        ]);
    }

    public function update(UpdateProfileRequest $request)
    {
        $request->user()->update(
            $request->all()
        );

        return redirect()->back();
    }

}
