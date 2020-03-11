<?php

namespace App\Http\Controllers;

use App\Question;
use App\Dataset;
use App\User;
use App\Edit;
use Spatie\Searchable\Search;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search()
    {
        $query = request('search');
        $searchResults = (new Search())
        ->registerModel(Question::class, 'title')
        ->registerModel(Dataset::class, 'name')
        ->registerModel(User::class, 'name')
        //->registerModel(Edit::class, 'firstname')
        //->registerModel(Edit::class, 'lastname')
        ->search($query);

        return view('search.result', compact('searchResults', 'query'));
    }
}

