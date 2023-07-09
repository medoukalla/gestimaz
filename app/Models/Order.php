<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class Order extends Model
{


    use SoftDeletes;

    /**
     * Get the server that owns the Order
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function server() {
        return $this->belongsTo(Server::class, 'server_id')->withTrashed();
    }


    /**
     * Get the pack associated with the Order
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pack() {
        return $this->belongsTo(Pack::class, 'pack_id');
    }


    /**
     * Get the user associated with the Order
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }



    /**
     * Get the payment that owns the Order
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function payment() {
        return $this->belongsTo(Payment::class, 'payment_method');
    }




    /**
     * function to do some validations on discord 
     */
    static function check_discord($discord) {

        // first check if there any # 
        $dash = Str::contains($discord, '#');
        // if # not found return with invalid format 
        if ($dash == false) {
            return 'Discord invalide format';
        }
        
        // split discord using the # inro array 
        $explode = Str::of($discord)->explode('#');
        $discord_array['discord_username'] = $explode[0];
        $discord_array['discord_id'] = $explode[1];

        // now validate the discord_array
        $validator = Validator::make($discord_array, [
            'discord_username' => 'string',
            'discord_id' => 'digits:4'
        ]);
        if ( $validator->fails() ) {
            return $validator->errors()->first();
        }

        // everything is good 
        return 'success';
        
    }




    // function to return the static of and order as clear message for client 
    static function get_status_admin( $order ) {
        
        // Step 1 order waiting for admin to verify the mapment
        if( $order->payed == true && $order->payment_verified == false ) {
            return "<div class='badge badge-light-primary'>"."Confirmez le paiement"."</div>";
        }

        if( $order->payment_verified == true && $order->facturer == false ) {
            return "<div class='badge badge-light-info'>"."En attente de client"."</div>";
        }

        if( $order->facturer == true && $order->liviser == false ) {
            return "<div class='badge badge-light-info'>"."En attente de client"."</div>";
        }

        if( $order->liviser == true && $order->delivered == false ) {
            return "<div class='badge badge-light-warning'>"."Expédier les jetons"."</div>";
        }

        if( $order->delivered == true ) {
            return "<div class='badge badge-light-success'>"."Commande terminée"."</div>";
        }

    }


    // function to return the static of and order as clear message for client 
    static function get_status_user( $order ) {
    
        // Step 1 order waiting for admin to verify the mapment
        if( $order->payed == true && $order->payment_verified == false ) {
            return "<div class='badge badge-light-primary'>"."En attente de confirmation de votre paiement"."</div>";
        }

        if( $order->payment_verified == true && $order->facturer == false ) {
            return "<div class='badge badge-light-warning'>"."En attente de vous, ouvert pour continuer"."</div>";
        }

        if( $order->facturer == true && $order->liviser == false ) {
            return "<div class='badge badge-light-warning'>"."En attente de vous, ouvert pour continuer"."</div>";
        }

        if( $order->liviser == true && $order->delivered == false ) {
            return "<div class='badge badge-light-warning'>"."Attendre que les administrateurs transfèrent vos jetons"."</div>";
        }

        if( $order->delivered == true ) {
            return "<div class='badge badge-light-success'>"."Commande terminée"."</div>";
        }

    }

} 
