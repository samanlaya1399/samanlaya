<?php

namespace App\Http\Controllers\Admin;

use App\Discount;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends AdminController
{
    public function index(){

//        User::create([
//            'name' => 'علی',
//            'email' => 'alid@dfs.com',
//            'password' => bcrypt('123456')
//        ]);
//        return auth()->loginUsingId(1);

        $products = User::latest()->paginate(20);
        $title = 'لیست کاربران';

        return view('panel.user.all',compact('products','title'));
    }

    public function ActiveMonth()
    {
        $title = 'لیست کاربران فعال ماه اخیر';


        $users = DB::table('factors')
           ->select(DB::raw('user_id, COUNT(*) totalCount'))
            ->where([['status','>',0],['created_at','>',Carbon::now()->subDays(5)]])->groupBy('user_id')->orderBy('totalCount','desc')->get();

        return view('panel.user.activeusers',compact('users','title'));

    }
    public function ActiveWeek()
    {
        $title = 'لیست کاربران فعال هفته اخیر';


        $users = DB::table('factors')
           ->select(DB::raw('user_id, COUNT(*) totalCount'))
            ->where([['status','>',0],['created_at','>',Carbon::now()->subDays(3)]])->groupBy('user_id')->orderBy('totalCount','desc')->get();

        return view('panel.user.activeusers',compact('users','title'));

    }

    public function destroy(User $user)
    {
        $user->delete();
        return back();
    }

    public function setAdmin(User $user)
    {
         $user;
        $user->level='admin';
        $user->save();
        return back();
    }

    public function setUser(User $user)
    {
         $user;
        $user->level='user';
        $user->save();
        return back();
    }

    public function sendOneSms(Request $request)
    {
        $title = 'ارسال پیامک';
        $number = null;
        $number = $request->get('number');

        return view('panel.sms.send',compact('number','title'));
    }

    public function sendActionsms(Request $request)
    {

        $number = $request->get('number');
        $message = $request->get('message');

        $curl = curl_init();
        curl_setopt_array($curl,
            array(
                CURLOPT_URL => "https://api.ghasedak.io/v2/sms/send/simple ",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
//                CURLOPT_https_VERSION => CURL_https_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => "message=". $message ."&sender=3000683838&Receptor=".$number,
                CURLOPT_HTTPHEADER => array(
                    "apikey: 19731317f825a96342e1d54950bed079ec7abff0c1de68c71444b25fab00ba65",
                    "cache-control: no-cache",
                    "content-type: application/x-www-form-urlencoded"
                )));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
//            echo "cURL Error #:" . $err;
        } else {
//            echo $response;
        }


        return redirect(route('users.index'));

    }

    public function sendDiscount(Request $request)
    {

        $number = $request->get('number');
        $code = $request->get('code');
        $discount = Discount::find($code);

        $message = $discount->amount . '% تخفیف با استفاده از کد تخفیف: '. $discount->code.' سامان لعیا ';


        $curl = curl_init();
        curl_setopt_array($curl,
            array(
                CURLOPT_URL => "https://api.ghasedak.io/v2/sms/send/simple ",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
//                CURLOPT_https_VERSION => CURL_https_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => "message=". $message ."&sender=3000683838&Receptor=".$number,
                CURLOPT_HTTPHEADER => array(
                    "apikey: 19731317f825a96342e1d54950bed079ec7abff0c1de68c71444b25fab00ba65",
                    "cache-control: no-cache",
                    "content-type: application/x-www-form-urlencoded"
                )));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
//            echo "cURL Error #:" . $err;
        } else {
//            echo $response;
        }


        return redirect(route('users.index'));

    }


    public function editUser(User $user)
    {
        $title = 'ویرایش حساب کاربری';
        return view('panel.user.edit',compact('title','user'));
    }

    public function editPass(User $user)
    {
        $title = 'تغییر رمز عبور ';
        return view('panel.user.editpass',compact('title','user'));
    }

    public function update(Request $request,User $user)
    {
        $inputs = $request->all('name','first_name','gender','national_code','phone','avatar','email');
        $avatar = $request->file('avatar');
        if ($avatar){
            $inputs['avatar'] = $this->uploadAvatar($avatar);
        }else{
            $inputs['avatar'] = $user->avatar;
        }
        $user->update($inputs);

        return back()->with('success', ['تغییرات با موفقیت ذخیره شد.']);

    }

    public function updatePass(Request $request,User $user)
    {
        $this->validateLogin($request);

        $inputs = $request->all('current_pass','password','password_confirmation');

        if ($inputs['current_pass'] == $inputs['password']){
            return back()->with('error', ['رمز عبور فعلی و رمز جدید یکسان است! ']);
        }

        $current_password = Auth::User()->password;
        if( ! Hash::check($inputs['current_pass'], $current_password)){
            return back()->with('error', ['رمز عبور فعلی نادرست است!']);
        }

        if ($inputs['password'] != $inputs['password_confirmation']){
            return back()->with('error', ['تکرار رمز عبور جدید نادرست است!']);
        }

        $current_user = Auth::user();
        $current_user->password = Hash::make($inputs['password']);
        $current_user->save();

        return back()->with('success', ['تغییرات با موفقیت ذخیره شد.']);

    }

    protected function validateLogin(Request $request)
    {
        $this->validate($request, [
            'current_pass' => 'required|string',
            'password' => 'required|string|min:6',
            'password_confirmation' => 'required|string|min:6',
        ]);
    }
}
