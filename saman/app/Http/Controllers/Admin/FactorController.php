<?php

namespace App\Http\Controllers\Admin;

use App\Factor;
use App\Payment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FactorController extends Controller
{

    public function all()
    {
        $title = 'لیست فاکتورها';
        $factors = Factor::latest()->paginate(20);

        return view('panel.factor.all',compact('title','factors'));
    }

    public function success()
    {
        $title = 'سفارشات پرداخت شده ';
        $factors = Factor::whereStatus(1)->latest()->paginate(20);

        return view('panel.factor.all',compact('title','factors'));

    }

    public function process()
    {
        $title = 'سفارشات در حال تکمیل ';
        $factors = Factor::where([['status','=',0],['expire','>',Carbon::now()]])->latest()->paginate(20);

        return view('panel.factor.all',compact('title','factors'));

    }

    public function canceled()
    {
        $title = 'سفارشات لغو شده ';
        $factors = Factor::where([['status','=',0],['expire','<',Carbon::now()]])->latest()->paginate(20);

        return view('panel.factor.all',compact('title','factors'));

    }

    public function show(Factor $factor)
    {
        $title = 'جزئیات سفارش ';

        return view('panel.factor.details',compact('title','factor'));
    }

    public function payment(Factor $factor)
    {
        $title = 'جزئیات پرداخت ';

        return view('panel.factor.payment',compact('title','factor'));
    }
}
