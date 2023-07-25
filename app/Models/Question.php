<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;


    // get all active questions
    static function get_all_questions() {
        return Question::where('status', true)->get();
    }
}
