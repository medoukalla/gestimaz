<?php

namespace App\Http\Livewire;

use App\Models\Offer;
use App\Models\SellServer;
use App\Models\Server;
use App\Models\User;
use App\Notifications\newOffer;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Facades\Notification;

class Vendre extends Component
{

    // servers 
    public $classique_servers;
    public $retro_servers;
    public $touch_servers;

    // changeabled
    public $unite_price = 0;
    public $payment = 'paypal';
    public $currency = '€';
    public $total_amount = 0;
    public $quantity = 1;

    public $server;
    public $email;
    public $game_id;
    public $paypal_email;
    public $skrill_email;
    public $cih_number;
    public $name;
    public $discord;

    public $payment_info;

    public $error_message = null;
    public $success_message = null;

    // rules for validation
    protected $rules = [
        'name' => 'required|min:6',
        'email' => 'required|email',
        'game_id' => 'required',
        'quantity' => 'required|numeric|min:1',
        'payment_info' => 'required',
        'discord' => 'required'
    ];



    // amount function
    public function mount() {
        $this->classique_servers = SellServer::where('map_id', 'classique')->where('deleted_at', null)->get();
        $this->retro_servers = SellServer::where('map_id', 'retro')->where('deleted_at', null)->get();
        $this->touch_servers = SellServer::where('map_id', 'touch')->where('deleted_at', null)->get();

        if ( Auth::check() == true) {
            $this->name = Auth::user()->name;
            $this->email = Auth::user()->email;
            $this->game_id = Auth::user()->game_id;
        }
    }
    
    // render
    public function render()
    {
        if ( $this->server > 0) {
            
            if (  is_numeric( $this->quantity ) == true ) {
                // get unite price 
                $server = SellServer::where('id', $this->server)->first();



                if ( $this->payment == 'paypal' ) {
                    $this->currency = '€';
                    $this->unite_price = $server->price;
                    $this->total_amount = $this->quantity * $this->unite_price;
    
                }elseif ( $this->payment == 'skrill' ) {
                    $this->currency = '€';
                    $this->unite_price = $server->price_skrill;
                    $this->total_amount = $this->quantity * $this->unite_price;
    
                }else {
                    $this->currency = 'MAD';
                    $this->unite_price = $server->price_mad;
                    $this->total_amount = $this->quantity * $this->unite_price;
                }
            }else {
                $this->unite_price = 0;
                $this->total_amount = 0;
            }
            
        }else {
            $this->unite_price = 0;
            $this->total_amount = 0;
        }

        return view('livewire.vendre');
    }


    public function send_order() {

        if ( $this->server < 1 ) {
            $this->error_message = "Veuillez d'abord sélectionner le serveur.";
            return;
        }else { $this->clear_messages(); }

        // get server
        $server = SellServer::where('id', $this->server )->first();

        // if logged in user not a client
        if( Auth::user()->role_id != 2 ) {
            $this->error_message = "Ce formulaire est réservé aux clients et non aux administrateurs";
            return;
        }else { $this->clear_messages(); }


        // if quantity is less than min allowed
        if( $this->quantity < $server->min ) {
            $this->error_message = "Désolé, nous ne pouvons pas acheter moins de ".$server->min." M sur ce serveur.";
            return;
        }else { $this->clear_messages(); }

        // if quantity is more than max allowed 
        if( $this->quantity > $server->max ) {
            $this->error_message = "Désolé, nous ne pouvons pas acheter plus de ".$server->max." M sur ce serveur.";
            return;
        }else { $this->clear_messages(); }


        $this->validate();


        // save new offer in database 
        $offer = new Offer();
        $offer->quantity = $this->quantity;
        $offer->total = $server->price * $this->quantity;
        $offer->game_id = $this->game_id;
        $offer->payment = $this->payment;
        $offer->name = $this->name;
        $offer->email = $this->email;
        $offer->discord = $this->discord;
        $offer->user_id = Auth::user()->id;
        $offer->server_id = $this->server;
        $offer->payment_info = $this->payment_info;


        // if offer saved successfully clear the form and return success message 
        if ( $offer->save() ) {
            // remove error message if already found an error 
            $this->error_message = null;
            // clear the inputs 
            $this->name = $this->email = $this->discord = $this->paypal_email = $this->skrill_email = $this->cih_number = $this->game_id = null;
            // set quantity back to 1 
            $this->quantity = 1;
            // return success message 
            $this->success_message = "Votre offre a été envoyée avec succès. Nous vous contacterons dès que possible";


            // send notification for non admin users 
            $admins = User::where('role_id', '!=', 2)->get();
            Notification::send( $admins, new newOffer( $offer ) );
        }

    }

    public function clear_messages() {
        $this->error_message = null;
        $this->success_message = null;
    }
}
