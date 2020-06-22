<?php

namespace App\Http\Controllers;

use App\Http\Requests\TravelCommentRequest;
use Illuminate\Http\Request;
use App\TravelPackage;
use App\Comment;
class TravelPackageCommentController extends Controller
{
    public function store(TravelCommentRequest $request, TravelPackage $travelPackage)
    {
        
        // $travelPackage->comment()
        //     ->create(
        //      array_merge(
        //         $request->only('comment'),
        //         ['user_id' => auth()->id()]
        // ));

        Comment::create([
            'travel_packages_id' => $travelPackage->id,
            'user_id' => auth()->id(),
            'comment' => $request->comment
        ]);
        
        return redirect()->back();

    }
}
