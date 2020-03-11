<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
     * @return \Illuminate\Http\Response
     */
    // public function index(User $user)
    // {
    //     $questions = Edit::latest()->get();

    //     return view('Profile.index', compact('user'));
    // }

    /**
     * Show the form for creating a new resource.
     * @param  \Illuminate\Http\Request  $request
     * @param \Illuminate\Http\Edit
     * @param \Illuminate\Http\User
     * @return \Illuminate\Http\Response
     */
    public function create(User $user)
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
    public function store(Request $request, User $user)
    {
        // return $request;
        $edit = new Edit;

        $edit->firstname = $request->firstname;
        $edit->lastname = $request->lastname;
        $edit->user_id = auth()->user()->id;
        $edit->name = auth()->user()->name;
        $edit->phone = $request->phone;
        $edit->description = $request->description;
        $edit->gender = $request->gender;
        $edit->dob = $request->dob;
        $edit->interest = $request->interest;
        

        $edit->save();
        return view('profile', compact('user'));
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
    public function edit(Question $question)
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
    public function update(Request $request, Question $question)
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



    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    // public function index(\App\User $user)
    // {
    //     return view('edit', compact('user'));
    // }

    // protected function create(array $edit)
    // {
    //     return User::create([
    //         'firstname' => $edit['firstname'],
    //         'lastname' => $edit['lastname'],
            
    //     ]);
    // }
    
    // public function update(Request $request)

    // {
    //     $user = Auth::user();
    
                
    
    //     $this->validate($request,[
    
    //         'firstname' => 'max:255',
    
    //         'lastname' => 'max:255'
    
    //     ]);
    
            
    //     $user->firstname = $request->firstname;
    
    //     $user->lastname = $request->lastname;
    
                 
    
    //     /*if($request->password){
    
               
    
    //         $this->validate($request,[
    
    //             'password' => 'min:6|confirmed',
    
    //         ]);
    
                  
    
    //         $user->password = bcrypt($request->password);
    
    //     }*/
    
                 
    
    //     if($request->hasFile('profileImg')){
    
              
    
    //         $this->validate($request,[
    
    //             'profileImg' =>  'mimes:png',
    
    //         ]);
    
    //         $profileName = $user->id.'_avatar'.time().'.'.request()->profile->getClientOriginalExtension();
    
    //         $request->profile->storeAs('avatars',$profileName);
    
            
    
    //         $user->profile = $profileName;
    
    //     }
    
        
    
    //     $user->save();
    
        
    
    //     return view('profile', array('user' => Auth::user()));
    
    // }
}
