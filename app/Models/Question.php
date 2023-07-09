<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Question extends Model
{
    // function to get faq's 
    static function get_questions() {
        return Question::orderBy('id', 'desc')->where('active', true)->get();
    }   
}
