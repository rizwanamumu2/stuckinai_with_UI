<?php

namespace App;

<<<<<<< HEAD
//use Spatie\Searchable\Searchable;
//use Spatie\Searchable\SearchResult;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Edit extends Model 
{
     protected $fillable = [
         'phone','name','fistname','lastname', 'user_id', 'interest',
         'description','dob','gender','profile_image'
    ];
=======
use App\User;
use Illuminate\Database\Eloquent\Model;

class Edit extends Model
{
    // protected $fillable = [
    //     'phone','name','fistname','lastname', 'user_id', 'interest','description','dob','gender',
    // ];
>>>>>>> 7ce04a357879d12207460ad9acf6a6cdb425ebbb

    public function user()
    {
        return $this->belongsTo(User::class);
    }
<<<<<<< HEAD
    // public function getSearchResult(): SearchResult
    // {
    //    $url = route('profile.show', $this->id);
    //    return new \Spatie\Searchable\SearchResult(
    //        $this,
    //        $this->firstname,
    //        //$this->lastname,
    //        $url
    //    );
    // }

   
}
=======
}
>>>>>>> 7ce04a357879d12207460ad9acf6a6cdb425ebbb
