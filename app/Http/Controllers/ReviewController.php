<?php

namespace App\Http\Controllers;
use App\Reviews;

use Illuminate\Http\Request;

class ReviewController extends Controller
{

    public function index()
    {
        $review = Reviews::latest()->get();

        return view('Review.index', compact('review'));
    }

    public function create()
    {
        return view('Review.create');
    }

    public function store(Request $request)
    {
        // return $request;
        $review = new Reviews;

        $review->user_id = auth()->user()->id;
        $review->username = auth()->user()->name;
        $review->title = $request->title;
        $review->description = $request->description;

        $review->save();

        return redirect('/reviews');
    }

}
