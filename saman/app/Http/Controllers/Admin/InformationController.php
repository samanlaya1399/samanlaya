<?php

namespace App\Http\Controllers\Admin;

use App\Information;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Morilog\Jalali\CalendarUtils;

class InformationController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'لیست  صفحات ثابت';
        $articles = Information::latest()->paginate(20);
        return view('panel.pages.all', compact('title','articles'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'ثبت صفحه جدید ';
        return view('panel.pages.create', compact('title'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imagesUrl = null;
        if($request->file('images')){
        $imagesUrl = $this->uploadPic($request->file('images'));
        }
        auth()->user()->information()->create(array_merge($request->all('title','description','body','tags','images','galleries','key'), ['images'=>$imagesUrl]));
        return redirect(route('information.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function show(Information $information)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function edit(Information $information)
    {
        $title = 'ویرایش مطلب ';

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

        return view('panel.pages.edit' , compact('information','month_array', 'month_num','title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Information $information)
    {

        $gre_date =   CalendarUtils::toGregorian($request->get('year'),$request->get('month'),$request->get('day'));
        $date_time = json_encode($gre_date);
        $date_time = str_replace('[','',$date_time);
        $date_time = str_replace(']','',$date_time);
        $date_time = str_replace(',','-',$date_time);

        $time = strtotime($date_time);

        $newformat = date('Y-m-d',$time);
        $final_timestamp = $newformat. ' ' . $request->get('hour'). ':' . $request->get('min'). ':' . $information->created_at->format('i');


        $file = $request->file('images');
        $inputs = $request->all('title','description','body','tags','images','key');
        if($file) {
            $inputs['images'] = $this->uploadImages($request->file('images'));
        } else {
            $inputs['images'] = $information->images;

        }
        $information->setCreatedAt($final_timestamp);
        $information->update($inputs);

        return redirect(route('information.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function destroy(Information $information)
    {
        $information->delete();
        return back();
    }
}
