<?php

namespace App\Http\Controllers\Admin;

use App\Discount;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'لیست کدهای تخفیف';
        $discounts = Discount::latest()->paginate(20);

        return view('panel.discount.all',compact('title','discounts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'ثبت کدتخفیف';
        $users = User::all('name','mobile','id');

        $month_num = array();
        for ($m=1; $m<=12; $m++) {
            $month = jdate(date('F', mktime(0,0,0,$m, 1, date('Y'))))->format('%m');
            array_push($month_num,$month);
        };
        $month_array = array();
        for ($m=1; $m<=12; $m++) {
            $month = jdate(date('F', mktime(0,0,0,$m, 1, date('Y'))))->format('%B');
            array_push($month_array,$month);
        };


        return view('panel.discount.create',compact('title','users','month_array','month_num'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        auth()->user()->discount()->create(array_merge($request->all('code','amount','description','client_id','max')));

        return redirect(route('discount.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function show(Discount $discount)
    {
        $title = 'جزئیات کد تخفیف';

        return view('panel.discount.details',compact('title','discount'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function edit(Discount $discount)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Discount $discount)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function destroy(Discount $discount)
    {
        //
    }
}
