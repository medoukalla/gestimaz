<?php

namespace App\Http\Livewire;

use App\Models\Offer;
use App\Notifications\offerAccepted;
use App\Notifications\offerCancelled;
use App\Notifications\offerFinished;
use Livewire\Component;

class AdminOffers extends Component
{

    // offers for left side 
    public $offers;

    public $the_offer;
    public $switch_offer = false;
    public $show_offer;

    public function render()
    {

        // get offers
        $this->offers = Offer::orderBy('id', 'asc')->get();

        if ( $this->switch_offer == false) {

            if ( Offer::where('status', 'new')->exists() ) {
                $this->the_offer = $this->offers->where('status', 'new')->first();
            }elseif ( Offer::where('status', 'encourse')->exists() ) {
                $this->the_offer = $this->offers->where('status', 'encourse')->first();
            }elseif ( Offer::where('status', 'paye')->exists() ) {
                $this->the_offer = $this->offers->where('status', 'paye')->first();
            }elseif ( Offer::where('status', 'annule')->exists() ) {
                $this->the_offer = $this->offers->where('status', 'annule')->first();
            }

        }else {
            $this->the_offer = $this->show_offer;
        }

        return view('livewire.admin-offers');
    }


    // Get and show offer
    public function show_offer($id) {
        $this->show_offer = Offer::where('id', $id)->first();
        $this->switch_offer = true;
    }


    // cancel offer
    public function cancel_offer($id) {
        $offer = Offer::where('id', $id)->first();
        $offer->status = 'annule';
        if ( $offer->save() ) {
            $this->show_offer = $offer;
            $this->switch_offer = true;

            // send offer cancelled notification to client
            $owner = $offer->user;
            $owner->notify( new offerCancelled() );
        }
    }


    // accept offer
    public function accept_offer($id) {
        $offer = Offer::where('id', $id)->first();
        $offer->status = 'encourse';
        if ( $offer->save() ) {
            $this->show_offer = $offer;
            $this->switch_offer = true;

            // Send accept offer notification for Client 
            $owner = $offer->user;
            $owner->notify( new offerAccepted() );
        }

    }


    // complete offer 
    public function finish_offer($id) {
        $offer = Offer::where('id', $id)->first();
        $offer->status = 'paye';
        if( $offer->save() ) {
            $this->show_offer = $offer;
            $this->switch_offer = true;

            // Send offer completed notification for Client 
            $owner = $offer->user;
            $owner->notify( new offerFinished() );

        }
    }


    public function undo_offer($id) {
        $offer = Offer::where('id', $id)->first();
        $offer->status = 'new';
        if( $offer->save() ) {
            $this->show_offer = $offer;
            $this->switch_offer = true;
        }
    }

}
