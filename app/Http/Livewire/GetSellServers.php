<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\SellServer;

class GetSellServers extends Component
{

    public $classic_servers;
    public $retro_servers;
    public $touch_servers;
    public $currency;


    public function mount($currency) {

        $this->classic_servers = SellServer::where('map_id', 'classique')->where('deleted_at', null)->get();
        $this->retro_servers =   SellServer::where('map_id', 'retro'  )->where('deleted_at', null)->get();
        $this->touch_servers =   SellServer::where('map_id', 'touch'  )->where('deleted_at', null)->get();

        if ($currency == '') {
            $this->currency = 'euro';
        }else {
            $this->currency = $currency;
        }
    }

    public function render()
    {
        return view('livewire.get-sell-servers', [
            'classic_servers' => $this->classic_servers,
            'retro_servers' => $this->retro_servers,
            'touch_servers' => $this->touch_servers,
        ]);
    }
}
