<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Dataset;
use App\User;
use App\Edit;

class EditController extends Controller
{

         /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }

    /**
     * Display a listing of the resource.
     *
     
     * Show the form for creating a new resource.
     * @param  \Illuminate\Http\Request  $request
     * @param \Illuminate\Http\Edit
     * @param \Illuminate\Http\User
     * @return \Illuminate\Http\Response
     */
    public function create(User $user, Edit $edit)
    {   
         
        return view('edit', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param \Illuminate\Http\Edit
     * @param \Illuminate\Http\User
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, User $user, Edit $edit)
    {

        $questions=Question::where('user_id', $user->id)->get();
        $datasets=Dataset::where('user_id', $user->id)->get();
        $user_id=auth()->user()->id;

        Edit::where('id'===null)->create([
            'user_id' => auth()->user()->id,
            'name' => auth()->user()->name,
        ]);

        // Edit::where('id'!==null && 'user_id'!==$user_id )->create([
        //     'user_id' => auth()->user()->id,
        //     'name' => auth()->user()->name,
        // ]);
            
       
        
        Edit::where('user_id',$user_id)->update([
            'firstname' =>  request('firstname'),
            'lastname' => request('lastname'),
            //
            'phone'=> request('phone'),
            'description' => request('description'),
            'gender' => request('gender'),
            'dob' => request('dob'),
            'interest' => request('interest'),
            'city'=> request('city'),
            'country' => request('country'),
        ]);
        
        
        return redirect()->route('profile.show', ['auth()->user()->id'=>$user_id]);
        //return view('profile', compact('user','questions', 'datasets'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $question
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        // $relatedQuestions = Question::
        //         where('category_id', '!=', $question->category->id)
        //         ->where('id', '!=', $question->id)
        //         ->get();
        return view('profile', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Edit $edit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        //
    }

    public function getImageAttribute()
    {
        return $this->profile_image;
    }



}
