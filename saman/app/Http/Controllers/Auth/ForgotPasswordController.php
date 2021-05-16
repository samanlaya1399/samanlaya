<?php

namespace App\Http\Controllers\Auth;

use App\ActivationCode;
use App\Events\UserActivation;
use App\Events\UserRegistered;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function sendActivationCode(Request $request)
    {
        $this->validateMobile($request);

        $user = User::whereMobile($request->mobile)->first();
        event(new UserActivation($user));

        return redirect(route('activation'));
    }

    public function passForm()
    {
        return view('auth.passwords.resetpass');
    }

    public function resetPass(Request $request)
    {
        $ActivationCode = ActivationCode::where([['code','=',$request->code],['expire', '>', Carbon::now()]])->first();
        $user = $ActivationCode->user;
            $user->update([
            'password'=>bcrypt($request->password)
        ]);

        auth()->loginUsingId($ActivationCode->user->id);
        return redirect(route('index.main'));

    }

    protected function validateMobile(Request $request){
        $this->validate($request, ['mobile' => 'required|numeric|min:09000000000|max:09999999999']);
    }

}
