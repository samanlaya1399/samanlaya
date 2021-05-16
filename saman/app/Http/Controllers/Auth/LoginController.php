<?php

namespace App\Http\Controllers\Auth;

use App\Events\UserActivation;
use App\Http\Controllers\Controller;
use App\User;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin/panel';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $this->validateLogin($request);

        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        if (auth()->validate($request->only('mobile','password'))){
            $user = User::whereMobile($request->input('mobile'))->first();

            if ($user->active == 0){
                $checkActivationCode = $user->activation()->where('expire','>=',Carbon::now())->latest()->first();

                if (count($checkActivationCode) == 1){
                    if ($checkActivationCode->expire > Carbon::now()){
//                        $this->incrementLoginAttempts($request);
                        return redirect(route('activation'));

//                        return back()->withErrors(['code'=>'تعداد دفعات لاگین بیش از حد مجاز است. بعد از ۱۵ دقیقه دوبار وارد شوید.']);
                    }


                }else{
                    event(new UserActivation($user));
                    return redirect(route('activation'));
                }
            }
        }


        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }
}
