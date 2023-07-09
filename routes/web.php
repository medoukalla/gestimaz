<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendControlle;
use App\Models\User;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// home page 
Route::get('/', [FrontendControlle::class, 'index'])->name('frontend.index');

// check 
Route::get('/check', [FrontendControlle::class, 'check'])->name('frontend.check');


// maps 
Route::get('/maps', [FrontendControlle::class, 'maps'])->name('frontend.maps');

// servers 
Route::get('/servers', [FrontendControlle::class, 'servers'])->name('frontend.servers');

// about us page 
Route::get('/about', [FrontendControlle::class, 'about'])->name('frontend.about');

// faq page 
Route::get('/faq', [FrontendControlle::class, 'faq'])->name('frontend.faq');

// termes of services 
Route::get('/cgu', [FrontendControlle::class, 'terms'])->name('frontend.cgu');

// Privacy policy
Route::get('/cgv', [FrontendControlle::class, 'policy'])->name('frontend.cgv');


// Change password
Route::get('/change_password/{token}', [FrontendControlle::class, 'change_password'])->name('password.reset');
// Update password
Route::post('/change_password', [FrontendControlle::class, 'change_password_store'] )->name('password.reset.store');

// buy 
Route::get('/select_quantity/{server}', [FrontendControlle::class, 'step_1'])->name('frontend.step1')->middleware('auth');

// confirm buy order
Route::post('/game_id', [FrontendControlle::class, 'step_2'])->name('frontend.step2');
Route::get('/game_id', [FrontendControlle::class, 'step_2'])->name('frontend.step2');
Route::post('/select_payment', [FrontendControlle::class, 'step_3'])->name('frontend.step3')->middleware('auth');
Route::get('/select_payment', [FrontendControlle::class, 'step_3'])->name('frontend.step3')->middleware('auth');

Route::post('/confirm_payment', [FrontendControlle::class, 'step_4'])->name('frontend.step4')->middleware('auth');
Route::get('/confirm_payment', [FrontendControlle::class, 'step_4'])->name('frontend.step4')->middleware('auth');

// finish the payment
Route::get('/confirm_payment/{order}', [FrontendControlle::class, 'confirm_payment'])->name('frontend.confirm.payment')->middleware('auth');
Route::get('/order_details/{order}', [FrontendControlle::class, 'order_details'])->name('frontend.order.details')->middleware('auth');
Route::post('/order_details/{order}', [FrontendControlle::class, 'order_details_store'])->name('frontend.order.details')->middleware('auth');


// send verfication code for facturation form
Route::get('/verify_facturation', [FrontendControlle::class, 'send_email_code'])->name('order_send_code')->middleware('auth');

// remove current pendding order
Route::get('/clear_order', [FrontendControlle::class, 'clear_pendding_order'])->name('frontend.clear.order')->middleware('auth');

// sell
Route::get('/vendre', [FrontendControlle::class, 'vendre'])->name('frontend.sell');
Route::post('/vendre', [FrontendControlle::class, 'vendre_store'])->name('frontend.sell.store')->middleware('auth');

// exchange
Route::get('/exchange', [FrontendControlle::class, 'exchange'])->name('frontend.exchange');
Route::post('/exchange', [FrontendControlle::class, 'exchange_store'])->name('frontend.exchange.store');
Route::get('/exchange/{exchange}', [FrontendControlle::class, 'exchange_details'])->name('frontend.exchange.details')->middleware('auth');

// Contact page 
Route::get('/contact', [FrontendControlle::class, 'contact'])->name('frontend.contact');

// Procedure page
Route::get('/procedure', [FrontendControlle::class, 'procedure'])->name('frontend.procedure');
// Contact page
Route::get('/contact', [FrontendControlle::class, 'contact'])->name('frontend.contact');


// Sripe checkout
Route::post('checkout', [FrontendControlle::class, 'checkout'])->name('stripe.checkout')->middleware('auth');


// Subscribe in newsletter 
Route::post('/newsletter', [FrontendControlle::class, 'newsletter'])->name('frontend.newsletter');


// Check if email exists in the users table 
Route::post('/check_email', function(Request $request) {

    if ( $request->input('email') == '' ) {
        return response()->json([
            'exists' => false
        ], 200);
    }else {

        $email = User::select('email')->where('email', $request->input('email'));

        if ( $email->exists() ) {
            return response()->json([
                'exists' => true
            ], 200);
        }

        return response()->json([
            'exists' => false
        ], 200);
    }
})->name('check.email.exists');

## routes to change website currency in session 
Route::get('/currency/{currency}', function ($currency, Request $request) {

    if ( $currency == 'usd' || $currency == 'euro' || $currency == 'cad' || $currency == 'mad' ) {

        if ( $request->session()->has('currency') ) {
            $request->session()->forget('currency');
            $request->session()->put('currency', $currency);
        }else {
            $request->session()->put('currency', $currency);
        }

        return back();
    }
})->name('change_currency');

## VOYAGER (dashboard)
Route::group(['prefix' => 'dashboard'], function () {
    Voyager::routes();
});
