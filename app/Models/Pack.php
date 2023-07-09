<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Pack extends Model
{

    /**
     * The server that belong to the Pack
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function server() {
        return $this->belongsToMany(Server::class, 'server_pack', 'server_id', 'pack_id');
    }

}
