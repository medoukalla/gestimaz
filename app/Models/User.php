<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Order;
use Illuminate\Database\Eloquent\SoftDeletes;
use TCG\Voyager\Models\Role;

class User extends \TCG\Voyager\Models\User
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'game_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    // get last 4 members from the team 
    static function get_4_team_members() {
        return User::orderBy('id', 'desc')->where('role_id', 2)->where('deleted_at', null)->limit(4)->get();
    }



    // // function to get the logged in all orders 
    // static function get_user_orders( $user_id) {
    //     return Order::where('user_id', $user_id)->orderBy('id', 'desc')->paginate(15);
    // }



    // // function to get the logged in all excahnges 
    // static function get_user_exchanges( $user_id) {
    //     return Exchange::where('user_id', $user_id)->orderBy('id', 'desc')->simplePaginate(5);
    // }


    // // function to get the logged in all offers 
    // static function get_user_offers( $user_id) {
    //     return Offer::where('user_id', $user_id)->orderBy('id', 'desc')->simplePaginate(5);

    // }


    // // get total of kama sold 
    // static function total_kama_sold() {
    //     $total = 0;
    //     $orders = Order::select('quantity', 'bonus')->where('delivered', 1)->get();
    //     foreach ($orders as $order) {
    //         $total = $total + $order->quantity + ( $order->bonus / 1000000 );
    //     }
    //     return number_format((float)$total, 2, '.', '');
    // }


    // // get total kama sold in dollar 
    // static function total_kama_sold_dollar() {
    //     $total = 0;
    //     $orders = Order::select('total')->where('delivered', 1)->get();
    //     foreach ($orders as $order ) {
    //         $total = $total + $order->total;
    //     }
    //     return $total;
    // }



    // // get total net profit from the sold orders
    // static function total_kama_sold_net_profit() {
    //     $net_profit = 0;
    //     $orders = Order::select('quantity', 'bonus', 'server_id')->where('delivered', 1)->get();
    //     foreach ( $orders as $order ) {
    //         $price_buy = $order->server->price_buy;
    //         $quantity = $order->quantity + ( $order->bonux );
    //         $net_profit = $net_profit + ( $price_buy * $quantity );
    //     }

    //     return number_format((float)User::total_kama_sold_dollar() - $net_profit, 2, '.', '');
    // }



    // // get total of kama bought 
    // static function total_kama_bought() {
    //     $total = 0;
    //     $offers = Offer::select('quantity')->where('status', 'paye')->get();
    //     foreach ($offers as $offer) {
    //         $total = $total + $offer->quantity;
    //     }
    //     return number_format((float)$total, 2, '.', '');
    // }


    // // total kama bought in dollar 
    // static function total_kama_bought_dollar() {
    //     $total = 0;
    //     $offers = Offer::select('quantity', 'total', 'server_id')->where('status', 'paye')->get();
    //     foreach ($offers as $offer) {
    //         $total = $total + $offer->quantity * $offer->server->price ;
    //     }
    //     return number_format((float)$total, 2, '.', '');
    // }


    // // get total net profit from the bought orders
    // static function total_kama_bought_net_profit() {
    //     $net_profit = 0;
    //     $offers = Offer::select('quantity', 'total', 'server_id')->where('status', 'paye')->get();

    //     foreach ( $offers as $offer ) {

    //             $price_buy = $offer->quantity * $offer->server->price ;
    //             $price_sell = $offer->server->price_sell * $offer->quantity;
                
    //             $profit = $price_sell - $price_buy;
    //             $net_profit = $net_profit + $profit;
    //     }

    //     return number_format((float)$net_profit, 2, '.', '');
    // }





    // /**
    //  * Get amount of all completed orders for user 
    //  */
    // static function user_total_orders( $user_id ) {
    //     $user = User::where('id', $user_id)->first();
    //     $total = 0;
    //     // get all his orders where delivired =  true 
    //     $orders = Order::select('total')->where('user_id', $user->id)->where('delivered', 1)->get();
    //     foreach ($orders as $order) {
    //         $total = $total + $order->total;
    //     }

    //     return number_format((float) $total , 2, '.', '');
    // }



    // /**
    //  * Get amount of all completed offers for user 
    //  */
    // static function user_total_offers( $user_id ) {
    //     $user = User::where('id', $user_id)->first();
    //     $total = 0;
    //     // get all his orders where delivired =  true 
    //     $offers = Offer::select('quantity', 'server_id')->where('user_id', $user->id)->where('status', 'paye')->get();
    //     foreach ($offers as $offer) {
    //         $amount = $offer->quantity * $offer->server->price;
    //         $total = $total + $amount;
    //     }

    //     return number_format((float) $total , 2, '.', '');
    // }


    // /**
    //  * get number of exchanges made by a user 
    //  */
    // static function user_total_exchanges( $user_id ) {
    //     return Exchange::select('id')->where('user_id', $user_id)->where('status', 'completed')->count();
    // }



    // /**
    //  * Get the number of clients in platform 
    //  */
    // static function count_number_clients() {
    //     return User::where('role_id', 2)->count();
    // }


    /**
     * Get the role
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function role() {
        return $this->belongsTo(Role::class, 'role_id');
    }



    // /**
    //  * Calculate number off orders user have 
    //  */
    // static function count_total_orders( $user_id ) {
    //     return Order::select('id')->where('user_id', $user_id)->where('payed', true)->count();
    // }


    // /**
    //  * Calculate number off offers user have 
    //  */
    // static function count_total_offers( $user_id ) {
    //     return Offer::select('id')->where('user_id', $user_id)->count();
    // }


    // /**
    //  * Calculate number off exchanges user have 
    //  */
    // static function count_total_exchanges( $user_id ) {
    //     return Exchange::select('id')->where('user_id', $user_id)->count();
    // }

}
