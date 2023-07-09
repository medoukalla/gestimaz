<?php

namespace App\Http\Controllers;

use App\Models\Exchange;
use App\Models\Message;
use App\Models\Order;
use App\Models\User;
use App\Notifications\orderCanceled;
use App\Notifications\orderConfirmed;
use App\Notifications\orderFinished;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Database\Schema\SchemaManager;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


class BackendController extends Controller
{

    // Confirm order payment
    public function confirm_payment(Request $request, Order $order) {
        // if not loggin redirect him to loggin page
        if (!Auth::check()) {
            return redirect('/dashboard/login');
        }

        // if not have has permission to read orders
        if ( Auth::user()->hasPermission('read_orders') == false) {
            abort(403, 'Unauthorized.');
        }

        // confirm payment for order 
        $order->payment_verified = true;
        $order->save();


        // send welcome email to the new user
        $owner = $order->user;
        $owner->notify( new orderConfirmed( $order ) );


        return back()->with([
            'alert-type' => 'success',
            'message'    => "Paiement vérifié avec succès"
        ]);
    }

    // UNDO Confirm order payment
    public function confirm_payment_undo(Request $request, Order $order) {
        // if not loggin redirect him to loggin page
        if (!Auth::check()) {
            return redirect('/dashboard/login');
        }

        // if not have has permission to read orders
        if ( Auth::user()->hasPermission('read_orders') == false) {
            abort(403, 'Unauthorized.');
        }

        // if next step is done return message Can't undo right now
        if ( $order->facturer == true ) {
            return back()->with([
                'alert-type' => 'error',
                'message'    => "Impossible d'annuler le paiement à ce stade."
            ]);
            
        }else {

            // confirm payment for order 
            $order->payment_verified = false;
            $order->save();
            return back()->with([
                'alert-type' => 'success',
                'message'    => "Vérification du paiement annulée"
            ]);

        }
    }

    // Confirm SHIPPING
    public function confirm_shipping(Request $request, Order $order) {
        // if not loggin redirect him to loggin page
        if (!Auth::check()) {
            return redirect('/dashboard/login');
        }

        // if not have has permission to read orders
        if ( Auth::user()->hasPermission('read_orders') == false) {
            abort(403, 'Unauthorized.');
        }


        // if previes step not done yet 
        if ( $order->liviser == false || $order->facturer == false ) {
            return back()->with([
                'alert-type' => 'error',
                'message'    => "Impossible de confirmer l'expédition à ce stade"
            ]);
        }

        // confirm payment for order 
        $order->delivered = true;
        $order->save();


        // send order finished email to this order owner 
        $order->user->notify( new orderFinished( $order ) );


        return back()->with([
            'alert-type' => 'success',
            'message'    => "Expédition confirmée avec succès"
        ]);
    }

    // UNDO SHIPPING
    public function confirm_shipping_undo(Request $request, Order $order) {
        // if not loggin redirect him to loggin page
        if (!Auth::check()) {
            return redirect('/dashboard/login');
        }

        // if not have has permission to read orders
        if ( Auth::user()->hasPermission('read_orders') == false) {
            abort(401, 'Unauthorized.');
        }

        // if next step is done return message Can't undo right now
        if ( $order->order_completed == true ) {
            return back()->with([
                'alert-type' => 'error',
                'message'    => "Impossible d'annuler l'expédition à ce stade."
            ]);
            
        }else {

            // confirm payment for order 
            $order->delivered = false;
            $order->save();
            return back()->with([
                'alert-type' => 'success',
                'message'    => "Expédition annulée"
            ]);

        }
    }


    // User (Client) orders
    public function my_orders() {
        return view('vendor.voyager.orders.my_orders', [
            'dataTypeContent' => User::get_user_orders( Auth::user()->id ),
        ]);
    }

    // User (Client) show order
    public function my_orders_view(Order $order) {

        // if logged in user not own this order 
        if ( $order->user->id != Auth::user()->id ) {
            abort(401);
        }

        return view('vendor.voyager.orders.view', [
            'dataTypeContent' => $order,
        ]);
    }



    // User (Client) Exchanges
    public function my_exchanges() {
        return view('vendor.voyager.exchanges.my_exchanges', [
            'dataTypeContent' => User::get_user_exchanges( Auth::user()->id ),
        ]);
    }

    // User (Client) show order
    public function my_exchanges_view(Exchange $exchange) {

        // if logged in user not own this order 
        if ( $exchange->user->id != Auth::user()->id ) {
            abort(401);
        }

        return view('vendor.voyager.exchanges.view', [
            'dataTypeContent' => $exchange,
        ]);
    }





    // User (Client) offers
    public function my_offers() {
        return view('vendor.voyager.offers.my_offers', [
            'dataTypeContent' => User::get_user_offers( Auth::user()->id ),
        ]);
    }

    // User (Client) show order
    public function my_offers_view(Exchange $exchange) {

        // if logged in user not own this order 
        if ( $exchange->user->id != Auth::user()->id ) {
            abort(401);
        }

        return view('vendor.voyager.offers.view', [
            'dataTypeContent' => $exchange,
        ]);
    }


    // get all notifications for logged in user 
    public function notifications() {
        return view('vendor.voyager.notifications', [
            'notifications' => Auth::user()->notifications,
        ]);
    }


    // function to cancel an order 
    public function cancel_order( Order $order ) {

        

        // if not have has permission to read orders
        if ( Auth::user()->hasPermission('read_orders') == false) {
            abort(403, 'Unauthorized.');
        }
        
        // if orrder payment already verified ( means already recieved order amount )
        if ( $order->payment_verified == true ) {
            return back()->with([
                'error' => "Le paiement déjà confirmé! Vous ne pouvez pas annuler cette commande."
            ]);
        }

        // save the owner befor deleting the order
        $owner = $order->user;

        // delete order 
        $order->delete();

        // send notification and email to the owner of this order 
        $owner->notify( new orderCanceled( $order ) );

        return back()->with([
            'success' => 'Commande annulée avec succès',
        ]);
        
    }


    // function when client submit the quick contact form from exchange page 
    public function quick_contact( Request $request ) {
        

        // if not loggin redirect him to loggin page
        if (!Auth::check()) {
            return redirect('/dashboard/login');
        }

        
        $message = new Message();
        $message->name = Auth::user()->name;
        $message->email = Auth::user()->email;
        $message->message = $request->input('message');

        if ( $message->save() ) {
            return response()->json( true , 200);
        }else {
            return response()->json( false , 404);
        }

    }

}
