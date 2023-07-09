<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Server;

class GetServers extends Component
{


    // this components to 3 servers for home page

    public $servers;
    public $currency;

    public function mount($currency) {
        $this->servers = Server::get_3_servers();
        if ($currency == '') {
            $this->currency = 'euro';
        }else {
            $this->currency = $currency;
        }
    }

    public function render()
    {
        return view('livewire.get-servers', [
            'servers' => $this->servers
        ]);
    }
}
