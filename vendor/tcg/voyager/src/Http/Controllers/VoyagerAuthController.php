<?php

namespace TCG\Voyager\Http\Controllers;


use App\Models\User;
use App\Notifications\newUser;
use App\Notifications\newUserMail;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\ValidationException;

class VoyagerAuthController extends Controller
{
    use AuthenticatesUsers;

    public function login()
    {
        if ($this->guard()->user()) {
            return redirect()->route('voyager.dashboard');
        }

        return Voyager::view('voyager::login');
    }

    public function postLogin(Request $request)
    {

        $this->validateLogin($request);

        

        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }


        // check manualy if user email and password is correct
        $check_user = User::where('email', $request->email);
        // if user not found bu the email
        if( ! $check_user->exists() ) {
            return back()->with('error', 'Adresse e-mail ou mot de passe incorrect');
        }

        // if password incorrect 
        if( ! Hash::check( $request->password, $check_user->first()->password ) ) {
            return back()->with('error', 'Adresse e-mail ou mot de passe incorrect');
        } 

        $credentials = $this->credentials($request);
        
        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user);


        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        $this->incrementLoginAttempts($request);
        
        return $this->sendFailedLoginResponse($request);

    }



    public function register()
    {
        if ($this->guard()->user()) {
            return redirect()->route('voyager.dashboard');
        }

        return Voyager::view('voyager::register');
    }

    public function postRegister(Request $request)
    {
        
        $user = User::create([
            'name' => $request->input('last-name').' '.$request->input('first-name'),
            'email' => $request->input('email'),
            'password' => Hash::make( $request->input('password') ),
            'game_id' => $request->input('game-id'),
        ]);


        event(new Registered($user));

        // send email to all admins
        $admins = User::where('role_id', 1)->get();
        Notification::send( $admins, new newUser( $user ));

        // send welcome email to the new user
        // $user->notify( new newUserMail($user) );

        Auth::login($user);

        return redirect( route('voyager.dashboard') );
        
        
    }


    // Show reset password page 
    public function reset()
    {
        return Voyager::view('voyager::reset');
    }


    
    /**
     * Send a reset link to the given user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    public function reset_email( Request $request ) {
        $this->validateEmail($request);

        // We will send the password reset link to this user. Once we have attempted
        // to send the link, we will examine the response then see the message we
        // need to show to the user. Finally, we'll send out a proper response.
        $response = $this->broker()->sendResetLink(
            $this->credentials($request)
        );

        return $response == Password::RESET_LINK_SENT
                    ? $this->sendResetLinkResponse($request, $response)
                    : $this->sendResetLinkFailedResponse($request, $response);
    }


    /**
     * Validate the email for the given request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     */
    protected function validateEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);
    }

    /**
     * Get the needed authentication credentials from the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    protected function credentials(Request $request)
    {
        return $request->only('email');
    }

    /**
     * Get the response for a successful password reset link.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $response
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    protected function sendResetLinkResponse(Request $request, $response)
    {
        return $request->wantsJson()
                    ? new JsonResponse(['message' => trans($response)], 200)
                    : back()->with('status', trans($response));
    }

    /**
     * Get the response for a failed password reset link.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $response
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function sendResetLinkFailedResponse(Request $request, $response)
    {
        if ($request->wantsJson()) {
            throw ValidationException::withMessages([
                'email' => [trans($response)],
            ]);
        }

        return back()
                ->withInput($request->only('email'))
                ->withErrors(['email' => trans($response)]);
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


    /*
     * Preempts $redirectTo member variable (from RedirectsUsers trait)
     */
    public function redirectTo()
    {
        return config('voyager.user.redirect', route('voyager.dashboard'));
    }

    /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard(app('VoyagerGuard'));
    }
}
