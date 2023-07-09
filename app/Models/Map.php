<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Map extends Model
{

    use SoftDeletes;

    // function returns the maps 
    static function get_maps() {
        return Map::orderBy('id', 'desc')->get();
    }


    /**
     * Get all of the servers for the Map
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function servers() {
        return $this->hasMany(Server::class, 'map_id' );
    }
}
