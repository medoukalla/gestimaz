<?php

namespace App\Http\Livewire;

use App\Models\Exchange;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ClientExchanges extends Component
{
    public $dataTypeContent;
    public $exchange;
    public $changed = false;

    public function render()
    {

        $this->dataTypeContent = Exchange::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->get();

        // dd( $this->dataTypeContent );

        if( $this->changed == false) {
            $this->exchange = $this->dataTypeContent->first();
        }
        return view('livewire.client-exchanges');
        
    }


    public function show_exchange( int $id ) {
        $this->changed = true;
        $this->exchange = Exchange::where('id', $id)->first();
    }

}
