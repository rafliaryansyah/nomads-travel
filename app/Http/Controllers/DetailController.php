<?php

namespace App\Http\Controllers;

use App\Comment;
use App\TravelPackage;
use App\Http\Requests\TravelCommentRequest;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index(Request $request, $slug)
    {
        $item = TravelPackage::with(['galleries', 'details', 'comment'])->where(compact('slug'))->firstOrFail();
        return view('pages.detail', compact('item'));
    }

    public function store(TravelCommentRequest $request, $slug)
    {

        $travelpackage = TravelPackage::firstOrFail();
        // dd($travelpackage);
        Comment::create([
            'travel_packages_id' => $travelpackage->id,
            'user_id' => auth()->id(),
            'comment' => $request->comment
        ]);
        // dd($request);
        return redirect()->back();
    }

}
