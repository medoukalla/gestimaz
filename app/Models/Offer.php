<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Offer extends Model
{
    use SoftDeletes;

    /**
     * Get the server that owns the Order
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function server() {
        return $this->belongsTo(SellServer::class, 'server_id')->withTrashed();
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
     * Calculate offer profit 
     */
    static function offer_profit( $offer_id ) {
        $offer = Offer::select('quantity', 'total', 'server_id')->where('id', $offer_id)->first();
        // spend 
        $spend = $offer->quantity * $offer->server->price;
        // price to sell for 
        $sell = $offer->server->price_sell * $offer->quantity;

        return $sell - $spend;

    }

}
