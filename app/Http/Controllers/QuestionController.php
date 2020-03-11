<?php

namespace App\Http\Controllers;

use App\Question;
use App\User;
use App\QuestionCategory;
use Illuminate\Http\Request;
use App\Category;

class QuestionController extends Controller
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
    public function index()
    {
        $questions = Question::latest()->get();

        return view('question.index', compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $questionCategories = QuestionCategory::latest()->get();
        return view('question.create', compact('questionCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $question = new Question;

        $question->title = $request->title;
        $question->category_id = $request->category_id;
        $question->user_id = auth()->user()->id;
        $question->description = $request->description;

        $question->save();

        return redirect('/questions');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        $relatedQuestions = Question::
                where('category_id', '!=', $question->category->id)
                ->where('id', '!=', $question->id)
                ->get();
        return view('question.show', compact('question', 'relatedQuestions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit($id, QuestionCategory $category)
    {
        //$id=$question->id;
        
        $questionCategories = QuestionCategory::latest()->get();
        $question = Question::find($id);
        $category_id= $question->category_id;
        $category = QuestionCategory::find($category_id);
        return view('question.edit', compact('question','category','questionCategories', 'id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  
     * @param \Illuminate\Http\Question
     * @param \Illuminate\Http\User
     * @return \Illuminate\Http\Response
     */
    public function updateQuestion($id, Request $request)
    {
        $questionCategories = QuestionCategory::latest()->get();
        //$question=Question::find($id);
       // $datasets=Dataset::where('user_id', $user->id)->get();
        $user_id=auth()->user()->id;
        //$id=$question->id;
        Question::where('id',$id)->update([
            'id'=> request('id'),
            'category_id' => request('category_id'),
            
            
            'user_id'=> $user_id,
            'title' =>  request('title'),
            'description' => request('description'),
            
        ]);
        
        
        return redirect()->route('profile.show', ['auth()->user()->id'=>$user_id]);
        //return view('profile', compact('user','questions', 'datasets'));
    }

    public function deleteQuestion($id) {
        $user_id=auth()->user()->id;
        $question = Question::find($id);
        $question->delete();
        return redirect()->route('profile.show', ['auth()->user()->id'=>$user_id]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {   
    //     $user_id= auth()->user()->id;
    //     //$questionCategories = QuestionCategory::latest()->get();
    //     $question = Question::find($id);
       
    //     //dd('question');
                
    //     return redirect()->route('profile/{user}', ['auth()->user()->id'=>$user_id]);


    // }

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
}
