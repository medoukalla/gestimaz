<?php

namespace App\Http\Livewire;

use App\Models\Server;
use Livewire\Component;

class GetAllServers extends Component
{


    // this components to 3 servers for home page

    public $servers;
    public $currency;
    public $otherServers;
    public $filter = false;

    public $first;
    public $second;

    public function mount($currency) {

        
        if( $this->filter == false ) {
            $this->servers = Server::where('active', true)->where('deleted_at', null)->orderBy('id', 'desc')->get();
            $this->first = 'aaa';
            $this->second = 'bbb';
        }

        if ($currency == '') {
            $this->currency = 'euro';
        }else {
            $this->currency = $currency;
        }
        $this->otherServers = null;
    }

    public function render()
    {

        return view('livewire.get-all-servers');
    }

    public function get_classique() {
        $this->servers = Server::get_map_servers_only('Classique');
        $this->otherServers = Server::get_map_servers_exept('Classique');
        $this->filter = true;
    }
    public function get_retro() {
        $this->servers = Server::get_map_servers_only('Retro');
        $this->otherServers = Server::get_map_servers_exept('Retro');
        $this->filter = true;
    }
    public function get_touch() {
        $this->servers = Server::get_map_servers_only('Touch');
        $this->otherServers = Server::get_map_servers_exept('Touch');
        $this->filter = true;
    }
}
