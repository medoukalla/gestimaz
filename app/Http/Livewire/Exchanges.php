<?php

namespace App\Http\Livewire;

use App\Models\Exchange;
use App\Notifications\exchangeCanceled;
use App\Notifications\exchangeConfirmed;
use App\Notifications\exchangeFinished;
use Livewire\Component;

class Exchanges extends Component
{

    public $dataTypeContent;
    public $exchange;
    public $changed = false;

    public function render()
    {
        if( $this->changed == false) {
            $this->exchange = $this->dataTypeContent->first();
        }
        return view('livewire.exchanges');
    }


    public function show_exchange( int $id ) {
        $this->changed = true;
        $this->exchange = Exchange::where('id', $id)->first();
    }



    // function to accepte excange
    public function accept_exchange( int $id ) {
        $exchange = Exchange::where('id', $id)->first();
        $exchange->status = 'progress';
        if ( $exchange->save() ) {
            $this->changed = true;
            $this->exchange = $exchange;


            // send exchange accept notification to client
            $owner = $exchange->user;
            $owner->notify( new exchangeConfirmed() );
        }
    }

    // function to cancel exchange
    public function cancel_exchange( int $id ) {
        $exchange = Exchange::where('id', $id)->first();
        $exchange->status = 'canceled';
        if ( $exchange->save() ) {
            $this->changed = true;
            $this->exchange = $exchange;


            // send exchange cancelled notification to client
            $owner = $exchange->user;
            $owner->notify( new exchangeCanceled() );
        }
    }

    // function to finish exchange
    public function finish_exchange( int $id ) {
        $exchange = Exchange::where('id', $id)->first();
        $exchange->status = 'completed';
        if ( $exchange->save() ) {
            $this->changed = true;
            $this->exchange = $exchange;

            // send exchange finished notification to client
            $owner = $exchange->user;
            $owner->notify( new exchangeFinished() );
        }
    }


}
