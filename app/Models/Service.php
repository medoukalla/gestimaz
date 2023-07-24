<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use SoftDeletes;

    // function to get services 
    static function get_services() {
        return Service::orderBy( 'id', 'desc' )->limit(6)->get();
    }
   
}
