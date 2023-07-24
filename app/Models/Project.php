<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use SoftDeletes;

    // get projects 
    static function get_projects(){
        return Project::where('status', true)->orderBy('id', 'desc')->get();
    }
}
