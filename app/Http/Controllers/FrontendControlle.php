<?php

namespace App\Http\Controllers;

use App\Models\Email;
use App\Models\Exchange;
use App\Models\Map;
use App\Models\Order;
use App\Models\Pack;
use App\Models\Payment;
use App\Models\Question;
use App\Models\SellServer;
use App\Models\Server;
use App\Models\User;
use App\Notifications\ConfirmFacturation;
use App\Notifications\newExchange;
use App\Notifications\newOrder;
use App\Notifications\orderReadyForShipping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver;
use TCG\Voyager\Facades\Voyager;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Password;


class FrontendControlle extends Controller
{
    /**
     * Display a frontend index page
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('index', [
            // get maps 
            'maps' => Map::get_maps(),
            // get lowest 3 servers price
            'cheap_servers' => Server::get_cheap_servers(),
            // get faq's 
            'faqs' => Question::get_questions(),
            // get server for sell 
            'sell_servers' => SellServer::get_sell_servers(),
        ]);
    }


    /**
     * Display a frontend index page
     *
     * @return \Illuminate\Http\Response
     */
    public function check(Request $request)
    {
        

        // check if the logged in user have ancompleted order in sessions started or not
        if ( $request->session()->has('order') && $request->session()->has('game_id') && $request->session()->has('payment_id') ) {
            // go to next step
            return redirect()->route('frontend.step4');
        }else {
            // clear the order and redirect user to home page 
            $request->session()->forget('order');
            $request->session()->forget('game_id');
            $request->session()->forget('payment_id');

            
            // redirect to index page
            //return redirect()->route('frontend.index');
            return redirect('/dashboard');
        }

    }

    /**
     * Display a frontend MAPS page
     *
     * @return \Illuminate\Http\Response
     */
    public function maps()
    {
        return view('maps');
    }



    /**
     * Display a frontend ABOUT page
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        return view('about');
    }


    /**
     * Display a frontend FAQ page
     *
     * @return \Illuminate\Http\Response
     */
    public function faq()
    {
        return view('faq');
    }


    /**
     * Display a frontend TERMS page
     *
     * @return \Illuminate\Http\Response
     */
    public function terms()
    {
        return view('terms');
    }


    /**
     * Display a frontend POLICY page
     *
     * @return \Illuminate\Http\Response
     */
    public function policy()
    {
        return view('policy');
    }



    /**
     * Display a frontend SERVERS page
     *
     * @return \Illuminate\Http\Response
     */
    public function servers(Request $request)
    {

        // if user has pending order in sessions 
        if ( $request->session()->exists('order') ) {
            return redirect()->route('frontend.step2');
        }

        // if map filter found 
        if ( $request->input('map') == null ) {

            return view('servers',[
                // get maps 
                'maps' => Map::get_maps(),
                // get random servers 
                'servers' => Server::get_random_servers(),
            ]);
        }else {
            // get servers by map filter 
            return view('servers',[
                // get maps 
                'maps' => Map::get_maps(),
                // get random servers 
                //'servers' => Server::get_map_servers( $request->input('map') ),
            ]);
        }
    }



    /**
     * Display a frontend BUY page
     *
     * @return \Illuminate\Http\Response
     */
    public function step_1(Server $server, Request $request)
    {

        // if user has pending order in sessions 
        if ( $request->session()->exists('order') ) {
            return redirect()->route('frontend.step2');
        }

        return view('step1',[
            'server' => $server,
        ]);
    }

    /**
     * Display a frontend STEP 2 page
     * Show user the form to enter his udername in the game
     *
     * @return \Illuminate\Http\Response
     */
    public function step_2(Request $request)
    {
        // check if user already have started an order or not  yet 
        if ( $request->session()->exists('order') ) {

            return view('step2',[
                'order' => $request->session()->get('order'),
                'game_id' => $request->session()->get('game_id'),
            ]);

        }else {

            // create order
            $order = array([
                'map_id' => $request->input('map_id'),
                'server_id' => $request->input('server_id'),
                'pack_id' => $request->input('pack_id'),
            ]);
            $request->session()->put('order', $order);

            return view('step2',[
                'order' => $request->session()->get('order'),
                'game_id' => $request->session()->get('game_id'),
            ]);
        }
    }
    

    public function step_3(Request $request) {

        if ( $request->session()->exists('order') ) {
            // delete game_id 
            $request->session()->forget('game_id');
            // add game_id new value
            $request->session()->put('game_id', $request->input('game_id'));
        }

        if ( ! $request->session()->has('order')  ) {
            $request->session()->forget('game_id');
            $request->session()->forget('order');
            return redirect()->route('frontend.servers');

        }

        return view('step3',[
            'order' => $request->session()->all(),
            'pack'  => Pack::where('id', $request->session()->get('order')[0]['pack_id'])->where('active', true)->first(),
            'pack_server' => Server::where('id', $request->session()->get('order')[0]['server_id'])->where('active', true)->first(),
            'payment_methods' => Payment::get_payments(),
        ]);
    }



    
    public function step_4(Request $request) {

        // step 1 add payment id to order array in sessions
        # first delete if found then add new value
        $request->session()->forget('payment_id');
        $request->session()->put('payment_id', $request->input('payment_id'));

        // step 2 if user is logged in ( display the step4.blade.php )
        if (Auth::check() ) {


            // if order info not found
            if ( !$request->session()->exists('order') ) {
                return redirect()->route('frontend.servers');

                // delete game_id, payment_id if exists
                $request->session()->forget('game_id');
                $request->session()->forget('payment_id');

            }else {

                // if order info exists and game_id missing 
                if ( !$request->session()->exists('game_id') ) {
                    return redirect()->route('frontend.step2');
                    // delete payment_id if exists
                    $request->session()->forget('payment_id');
                }


                // if order info exists and payment_id not exists 
                if ( !$request->session()->exists('payment_id') ) {
                    return redirect()->route('frontend.step4');
                }

            }

            ####### IF LOGGED IN IS NOT user 
            if ( Auth::user()->role_id != 2 ) {
                // clear session 
                $request->session()->forget('order');
                $request->session()->forget('payment_id');
                $request->session()->forget('game_id');

                return redirect('/dashboard')->with('error', 'Message');
            }


            // if all data exists create the order and store in database 
            // get pack 
            $pack = Pack::where('id', $request->session()->get('order')[0]['pack_id'])->first();
            // get server 
            $server = Server::where('id', $request->session()->get('order')[0]['server_id'])->first();

            $order = new Order();
            $order->quantity = $pack->quantity;
            $order->price = $server->price;
            $order->total = $server->price * $pack->quantity;


            if ( $pack->bonus > 0.00) {
                $order->bonus = ( ( ($pack->quantity * 1000000) * $pack->bonus ) / 100 );
            }else {
                $order->bonus = 0;
            }

            $order->payment_method = $request->session()->get('payment_id');
            $order->game_id  = $request->session()->get('game_id');
            $order->server_id = $server->id;
            $order->pack_id   = $pack->id;
            $order->payed = false;
            $order->payment_verified = false;
            $order->facturer = false;
            $order->liviser  = false;
            $order->order_completed  = false;
            $order->delivered  = false;
            $order->user_id = Auth::user()->id;

            if ($order->save()) {
                // delete all data from sessions 
                $request->session()->forget('order');
                $request->session()->forget('game_id');
                $request->session()->forget('payment_id');

            }


            // send new order notification to all admin 
            $admins = User::where('role_id', '!=', 2)->get();
            Notification::send( $admins, new newOrder( $order ) );

            return view('step4', [
                'faqs' => Question::get_questions(),
                'order' => $order,
                'payment' => $order->payment,
                'pack' => $order->pack,
                'server' => $order->server,
            ]);

        }else {
            // if not loggin redirect him to loggin page
            return redirect('/dashboard/login');
        }

    }


    public function confirm_payment(Request $request, Order $order) {


        // if not login redirect him to loggin page
        if (!Auth::check()) {
            return redirect('/dashboard/login');
        }

        // If logged in user don't own this order 
        if ( Auth::user()->id != $order->user_id ) {
            abort(401);
        }
        
        $order->payed = true;
        if ( $order->save() ) {
            return redirect()->route('frontend.order.details', $order);
        }


    }


    public function order_details(Order $order) {
        // if not loggin redirect him to loggin page
        if (!Auth::check()) {
            return redirect('/dashboard/login');
        }


        // if logged in user don't own this order 
        if ( $order->user_id == null || $order->user_id != Auth::user()->id  ) {
            return redirect('/');
        }

        return view('order_details', [
            'order' => $order,
            'server' => $order->server,
            'pack'   => $order->pack,
            'payment' => $order->payment,
        ]);
    }

    public function order_details_store(Request $request, Order $order) {


        // this orders doasn't belongs tho this logged in user
        if (Auth::user()->id != $order->user_id) {
            abort(401);
            // return back()->with('error', 'Sorry! You have no permission to this page');
        }

        // if user send the facturation form
        if ($request->input('action') == 'facturation') {


            $validator = Validator::make($request->all(), [
                'name'          =>  'required|string',
                'email'         =>  'required|email',
                'verify'    =>  'required|numeric',
                'city'    =>  'required',
                'code'  => 'required|numeric',
                'discord' => 'required'
            ]);

            // if validate fails
            if ($validator->fails()) {

                return back()->withInput()->with('error', $validator->errors()->first());

            }else {

                // validate the discord
                $check_discord = Order::check_discord($request->input('discord'));
                if ( $check_discord != 'success' ) {
                    return back()->withInput()->with('error', $check_discord);
                }

                // check if email code is correct
                if ( $request->input('code') == $request->session()->get('email_code') ) {

                    $order->facturation_name = $request->input('name');
                    $order->facturation_discrod = $request->input('discord');
                    $order->facturation_email = $request->input('email');
                    $order->facturation_code = $request->input('code');
                    $order->facturation_city = $request->input('city');
                    $order->facturation_phone = $request->input('phone');
                    $order->facturation_agree = true;

                    // change the facturer value
                    $order->facturer = true;

                    if ( $order->save() ) {
                        $request->session()->forget('email_code');
                        return redirect('order_details/'.$order->id);
                    }else {
                        return back()->withInput()->with('error', 'Erreur! Veuillez réessayer dans un instant.');
                    }

                }else {
                    return back()->withInput()->with('error', "Le code de vérification de l'e-mail n'est pas correct");
                }

            }
        }


        // if user send the livraison confirmation
        if ( $request->input('action') == 'livraison' ) {

            $order->liviser = true;
            $order->save();

            // send notification to admins 
            $admins = User::where('role_id', '!=', 2)->get();
            Notification::send( $admins, new orderReadyForShipping( $order ));

            return back();

        }


    }



    /**
     * When user on the facturation form and clicked the button se recieve verification code in his email
     *
     * @return \Illuminate\Http\Response
     * @param  \Illuminate\Http\Request  $request
     *
     */
    public function send_email_code(Request $request)
    {
        // generate random code
        $code = rand(100000, 999999);

        $order = Order::where('id', $request->input('order_id'))
            ->where('user_id', Auth::user()->id)
            ->first();

        // send email with code in it
        Notification::send(Auth::user(), new ConfirmFacturation($code, $order));

        // add code into session to validate it when the full form submited
        $request->session()->put(['email_code' => $code]);

        return response()->json(
            [
                'status' => 'success',
            ],
            200,
        );
    }

    // function for user to delete current pendding order from sessions 
    public function clear_pendding_order(Request $request) {
            $request->session()->forget('order');
            return redirect()->route('frontend.servers');
            
    }


    /**
     * Display a frontend SELL page
     *
     * @return \Illuminate\Http\Response
     */
    public function vendre()
    {
        // get all servers ( sell servers )
        return view('sell', [
            'sellServers' => SellServer::orderBy('id', 'desc')->get(),
        ]);
    }



    /**
     * Display a frontend SELL page
     *
     * @return \Illuminate\Http\Response
     */
    public function vendre_store( Request $request ) {
        
    }



    /**
     * Display a frontend EXCHANGE page
     *
     * @return \Illuminate\Http\Response
     */
    public function exchange()
    {
        return view('exchange', [
            'servers' => Server::get_random_servers(),
            'maps' => Map::all(),
        ]);
    }


    /**
     * Store the exchange order info
     *
     * @return \Illuminate\Http\Response
     */
    public function exchange_store(Request $request)
    {

        // if no user logged in
        // if not loggin redirect him to loggin page
        if (!Auth::check()) {
            return redirect('/dashboard/login');
        }


        // check if servers exists in database
        $server_from = Server::where('id', $request->input('server_from'));
        $server_to = Server::where('id', $request->input('server_to'));

        // check if servser not found and return an error 
        if ( !$server_from->exists() || !$server_to->exists() ) {
            return back()->withInput()->with([
                'status' => 'error',
                'message' => 'serveur introuvable'
            ]);
        }


        // get values for servers 
        $server_from = $server_from->first();
        $server_to = $server_to->first();


        // check if one of servers not active or both are not active and return error 
        if ( $server_from->active == false || $server_to->active == false ) {
            return back()->withInput()->with([
                'status' => 'error',
                'message' => 'Serveur non disponible'
            ]);
        }


        // if quantity requested is less than min allowed
        $quantity = $request->input('quantity');
        if ( $quantity < $server_from->min_quantity ) {
            return back()->withInput()->with([
                'status' => 'error',
                'message' => "Impossible de changer moins de".$server_from->min_quantity." dans ce serveur"
            ]);
        }

        // if quantity requested is large than max allowed
        if ( $quantity > $server_from->max_quantity ) {
            return back()->withInput()->with([
                'status' => 'error',
                'message' => "Impossible de changer plus grand que ".$server_from->max_quantity." dans ce serveur"
            ]);
        }



        // save new echange offer 
        $order = new Exchange();
        $order->from_server = $request->input('server_from');
        $order->to_server = $request->input('server_to');
        $order->quantity = $request->input('quantity');
        $order->quantity_get = $request->input('quantity_get');
        $order->from_name = $request->input('name_from');
        $order->to_name = $request->input('to_from');
        $order->status = 'new';
        $order->user_id = Auth()->user()->id;


        if ( $order->save() ) {

            // send new order notification to all admin 
            $admins = User::where('role_id', '!=', 2)->get();
            Notification::send( $admins, new newExchange( $order ) );

            return redirect()->route('frontend.exchange.details', $order)->with([
                'status' => 'success',
                'message' => "Votre demande d'échange a été soumise avec succès",
                'exchange' => $order,
            ]);
            
        }

    }


    /**
     * Store the exchange order info
     *
     * @return \Illuminate\Http\Response
     */
    public function exchange_details(Exchange $exchange) {

        // if logged in user is not the owner 
        if ( Auth::user()->id != $exchange->user_id ) {
            abort(401);
        }

        

        return view('exchange_details', [
            'exchange' => $exchange
        ]);
    }


    /**
     * Display a frontend CONTACT page
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return view('contact');
    }


     /**
     * Display a frontend PROCEDURE page
     *
     * @return \Illuminate\Http\Response
     */
    public function procedure()
    {
        return view('procedure');
    }




    public function checkout(Request $request) {


        // if user not logged in 
        if ( ! Auth::check() ) {
            return redirect('/dashboard/login');
        }

        // IF LOGGED IN IS NOT user 
        if ( Auth::user()->role_id != 2 ) {
            // clear session 
            $request->session()->forget('order');
            $request->session()->forget('payment_id');
            $request->session()->forget('game_id');

            return redirect('/dashboard')->with('error', 'Message');
        }


        $order = Order::where('id', $request->input('order_id'))->first();

        // if all data exists create the order and store in database 
        // get pack 
        $pack = $order->pack;
        // get server 
        $server = $order->server;



        // set data
        $name = $server->name;
        $description = $server->name.' - '.$order->quantity. '.000.000 M';
        $image = 'https://i.ibb.co/NCqMt4z/Logo.png';

        // checkout
        \Stripe\Stripe::setApiKey(env('stripe_sk'));
        $session = \Stripe\Checkout\Session::create([
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'eur',
                        'product_data' => [
                            'name' => $name,
                            'description' => $description,
                            'images' => [$image],
                        ],
                        'unit_amount' => $order->total * 100, //
                    ],
                    'quantity' => 1,
                ],
            ],
            'mode' => 'payment',
            'success_url' => route('frontend.order.details', $order),
            'cancel_url'  => route('frontend.servers'),
        ]);

        $order->payed = true;
        $order->payment_verified = true;
        $order->save();

        return redirect()->away($session->url);

    }



    public function success($order) {

        //return the route url
        return 'confirm_payment'.'/'.$order;
    }



    // function to add email into newsletter 
    public function newsletter( Request $request ) {

        // check if email already subscribed 
        if ( Email::where('email', $request->input('email'))->exists() ) {
            return response()->json( true , 200);
        }

        $email = new Email();
        $email->email = $request->input('email');
        
        if ( !$email->save() ) {
            return response()->json( false , 200 );
        }
        
        return response()->json( true , 200);

    }


    public function change_password( Request $request ) {
        return Voyager::view('voyager::change_password', [
            'tok' => $request->token,
            'email' => $request->email
        ]);
    }


    /**
     * Reset the given user's password.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    public function change_password_store( Request $request ) {
        // get token by email
        $updatePassword = DB::table('password_resets')->where(['email' => $request->email]);

        // if there is no token by this email 
        if( !$updatePassword->exists() ) {
            return back()->with('error', 'Jeton de réinitialisation introuvable! Envoyer un nouveau jeton de réinitialisation');
        }

        // if token exists but not correct 
        if( ! Hash::check( $request->token, $updatePassword->first()->token ) ) {
            return back()->with('error', 'Jeton invalide! Envoyer un nouveau jeton de réinitialisation');
        }


        $user = User::where('email', $request->email)
                    ->update(['password' => Hash::make($request->password)]);

        DB::table('password_resets')->where(['email'=> $request->email])->delete();

        return redirect('dashboard/login')->with('message', 'Votre mot de passe a été changé!');

    }


        /**
     * Get the password reset validation rules.
     *
     * @return array
     */
    protected function rules()
    {
        return [
            'token' => 'required',
            'email' => 'required|email',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ];
    }


        /**
     * Get the password reset validation error messages.
     *
     * @return array
     */
    protected function validationErrorMessages()
    {
        return [];
    }



    /**
     * Get the broker to be used during password reset.
     *
     * @return \Illuminate\Contracts\Auth\PasswordBroker
     */
    public function broker()
    {
        return Password::broker();
    }


        /**
     * Get the password reset credentials from the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    protected function credentials(Request $request)
    {
        return $request->only(
            'email', 'password', 'password_confirmation', 'token'
        );
    }

}
