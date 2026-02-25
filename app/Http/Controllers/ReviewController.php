<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    //Review
    public function store(Request $request)
    {
        Review::create([
            'user_id' =>  Auth::id(),
            'rating' => $request->rating,
            'comment' => $request->comment,
        ]);

        return back()->with('success', 'Merci pour votre avis !');
    }
}
