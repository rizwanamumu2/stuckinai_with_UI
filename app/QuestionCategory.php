<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionCategory extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function questions()
    {
        return $this->belongsTo(Question::class);
    }

}
