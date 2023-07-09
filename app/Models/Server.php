<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Server extends Model
{

    use SoftDeletes;


    // get cheapest servers ( 3 servers for homepage )
    static function get_cheap_servers() {
        return Server::orderBy('price', 'asc')->where('deleted_at', null)->limit(3)->get();
    }


    // function to get random servers 
    static function get_random_servers() {
        return Server::where('active', true)->where('deleted_at', null)->get();
    }


    // function to get 3 servers for home page
    static function get_3_servers() {
        return Server::where('active', true)->where('deleted_at', null)->orderBy('price', 'asc')->limit(3)->get();
    }


    // function to get servers using map filter  OR get all server
    static function get_map_servers($map_name) {

        // get map id by map name 
        $map = Map::where('name', $map_name);

        if ( $map->exists() == true ) {
            $map_id = $map->first()->id;
            return Server::where('map_id', $map_id)->where('deleted_at', null)->where('active', true)->get();
        }else {
            return Server::where('active', true)->where('deleted_at', null)->get();
        }

    }


    static function get_map_servers_only( $map_name ) {
        // get map id by map name 
        $map = Map::where('name', $map_name);

        if ( $map->exists() == true ) {
            $map_id = $map->first()->id;
            return Server::where('map_id', $map_id)->where('deleted_at', null)->where('active', true)->get();
        }
    }

    static function get_map_servers_exept( $map_name ) {
        // get map id by map name 
        $map = Map::where('name', $map_name);

        if ( $map->exists() == true ) {
            $map_id = $map->first()->id;
            return Server::where('map_id', '!=', $map_id)->where('deleted_at', null)->where('active', true)->get();
        }
    }

    


    /**
     * The packs that belong to the Server
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function packs() {
        return $this->belongsToMany(Pack::class, 'server_pack', 'server_id', 'pack_id');
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
