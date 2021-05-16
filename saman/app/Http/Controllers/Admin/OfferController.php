<?php

namespace App\Http\Controllers\Admin;

use App\Offer;
use App\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Morilog\Jalali\CalendarUtils;
use Morilog\Jalali\Jalalian;

class OfferController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'لیست  پیشنهادات ویژه';
        $discounts = Offer::latest()->paginate(20);

        return view('panel.offer.all',compact('title','discounts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'ثبت پیشنهاد ویژه';

        $products = Product::all('title','id');
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


        return view('panel.offer.create',compact('title','month_array','month_num','products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imagesUrl = $this->uploadPic($request->file('images'));

        $selected_date =  $request->get('year'). '-' . $request->get('month') . '-' . $request->get('day');

        $gre_date =   CalendarUtils::toGregorian($request->get('year'),$request->get('month'),$request->get('day'));
       $date_time = json_encode($gre_date);
           $date_time = str_replace('[','',$date_time);
           $date_time = str_replace(']','',$date_time);
           $date_time = str_replace(',','-',$date_time);
   
            $time = strtotime($date_time);
   
           $newformat = date('Y-m-d',$time);
           $final_timestamp = $newformat. ' ' . $request->get('hour'). ':' . $request->get('min'). ':' . Carbon::now()->format('i');
   

        auth()->user()->offer()->create(array_merge($request->all('product_id','discount'),['expire'=>$final_timestamp,'images'=>$imagesUrl]));
        return redirect(route('offer.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function show(Offer $offer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function edit(Offer $offer)
    {
        $title = 'ویرایش پیشنهاد ویژه';

        $products = Product::all('title','id');
        $month_num = array();
        for ($m=1; $m<=12; $m++) {
            $month = jdate(date('F', mktime(0,0,0,$m, 1, date('Y'))))->format('%m');
            array_push($month_num,$month);
        };
        $month_array = array();
        for ($m=1; $m<=12; $m++) {
            $month = jdate(date('F', mktime(0,0,0,$m, 1, date('Y'))))->format('%B');
            array_push($month_array,$month);
        }

        return view('panel.offer.edit',compact('title','month_array','month_num','products','offer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Offer $offer)
    {
        $selected_date =  $request->get('year'). '-' . $request->get('month') . '-' . $request->get('day');

        $gre_date =   CalendarUtils::toGregorian($request->get('year'),$request->get('month'),$request->get('day'));
        $date_time = json_encode($gre_date);
        $date_time = str_replace('[','',$date_time);
        $date_time = str_replace(']','',$date_time);
        $date_time = str_replace(',','-',$date_time);

        $time = strtotime($date_time);

        $newformat = date('Y-m-d',$time);
        $final_timestamp = $newformat. ' ' . $request->get('hour'). ':' . $request->get('min'). ':' . Carbon::now()->format('i');


        $file = $request->file('images');
        $inputs = $request->all('product_id','discount');
        $inputs['expire'] = $final_timestamp;
        if($file) {
            $inputs['images'] = $this->uploadImages($request->file('images'));
        } else {
            $inputs['images'] = $offer->images;

        }
        $offer->update($inputs);
        return redirect(route('offer.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Offer $offer)
    {
        $offer->delete();
        return back();
    }
}
