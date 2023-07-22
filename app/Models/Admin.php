<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;


class Admin extends Model
{

    // this model used just to get statistics for admin 


    // return number of buildings
    static function count_total_buildings() {
        return Building::where('deleted_at', null)->count();

    }

    // return number of team members  ( Team member role = 4 )
    static function count_total_team_members() {
        return User::select('id')->where('role_id', 4)->count();
    }

    // return number of hosses in total ( house, office, garage )
    static function count_total_locals() {
        return Apartment::where('deleted_at', null)->count();
    }

    // return number of projects
    static function count_total_projects() {
        return Project::where('status', true)->count();
    }

    // return total of peyments in the current mont 
    static function count_amount_payment_month() {
        $current_month =  Carbon::now()->format('m');
        $payments = Payment::whereMonth( 'created_at', $current_month );
        if ( $payments->count() < 1 ) {
            return 0;
        }
        $total = 0;
        foreach ( $payments->get() as $payment ) {
            $total = $total + $payment->amount;
        } 
        return $total;
    }
    
    static function count_amount_invoices_month() {
        $current_month =  Carbon::now()->format('m');
        $invoices = Invoice::whereMonth( 'created_at', $current_month );
        if ( $invoices->count() < 1 ) {
            return 0;
        }
        $total = 0;
        foreach ( $invoices->get() as $invoices ) {
            $total = $total + $invoices->total;
        } 
        return $total;
    }

}
