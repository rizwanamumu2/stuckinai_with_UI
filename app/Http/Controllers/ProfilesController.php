<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Question; 

class ProfilesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(\App\User $user)
    {
        return view('profile', compact('user'));
    }
}
