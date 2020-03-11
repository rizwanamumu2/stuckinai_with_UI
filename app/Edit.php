<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Edit extends Model
{
    // protected $fillable = [
    //     'phone','name','fistname','lastname', 'user_id', 'interest','description','dob','gender',
    // ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
