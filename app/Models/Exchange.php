<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Exchange extends Model
{
    /**
     * Get the user associated with the Order
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user() {
        return $this->belongsTo(User::class, 'user_id')->withTrashed();
    }

    /**
     * Get the server that owns the Order
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function server() {
        return $this->belongsTo(Server::class, 'from_server')->withTrashed();
    }


    public function from_server( $server_id ) {
        return Server::where('id', $server_id)->first()->withTrashed();
    } 


    public function to_server( $server_id ) {
        return Server::where('id', $server_id)->first()->withTrashed();
    } 




    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function exchange_from() {
        return $this->belongsTo(Server::class, 'from_server')->withTrashed();
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function exchange_to() {
        return $this->belongsTo(Server::class, 'to_server')->withTrashed();
    }



}
