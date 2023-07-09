<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Payment extends Model
{
    

    // function to get all method of payments 
    static function get_payments() {
        return Payment::where('active', true)->orderBy('id', 'desc')->get();
    }



    // Function to et payment info without using their name
    static function get_payment_by_name( $name ) {
        return Payment::where('name', $name)->first();
    }

}
