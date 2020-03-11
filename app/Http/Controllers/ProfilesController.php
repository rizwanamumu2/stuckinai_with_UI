<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Question; 
use App\Dataset;
use Image;
use App\Category;

class ProfilesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(\App\User $user, \App\Question $questions, \App\Dataset $datasets, \App\Category $category)
    {
        $questions=Question::where('user_id', $user->id)->get();
        $datasets=Dataset::where('user_id', $user->id)->get();
        //$category=Category::where('id', $datasets->category_id)->get();
        
        return view('profile',  compact('user','questions', 'category', 'datasets'));
    }

    //  public function upload_avatar(\App\User $user)
    //  {
    //      return view('image', compact('user'));
    //  }

    
}
