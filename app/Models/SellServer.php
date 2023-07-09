<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SellServer extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    //protected $table = 'sell_server';


    // function to get servers for sell
    static function get_sell_servers() {
        return SellServer::where('active', true)->where('deleted_at', null)->orderBy('id', 'desc')->get();
    }
    

    /**
     * Get the map that owns the Server
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function map() {
        return $this->belongsTo(Map::class, 'map_id');
    }
    

}
