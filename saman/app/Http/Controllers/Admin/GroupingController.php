<?php

namespace App\Http\Controllers\Admin;

use App\Grouping;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GroupingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'لیست بخش ها';
        $brands = Grouping::all();
        return view('panel.grouping.all',compact('title','brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'ثبت دسته بندی';
        return view('panel.grouping.create',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Grouping::create(['title'=>$request->title,'description'=>$request->description]);
        return redirect(route('grouping.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Grouping  $grouping
     * @return \Illuminate\Http\Response
     */
    public function show(Grouping $grouping)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Grouping  $grouping
     * @return \Illuminate\Http\Response
     */
    public function edit(Grouping $grouping)
    {
        $title = 'ویرایش دسته بندی';
        return view('panel.grouping.edit',compact('title','grouping'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Grouping  $grouping
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Grouping $grouping)
    {
        $inputs = $request->all('title','description');
        $grouping->update($inputs);
        return redirect(route('grouping.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Grouping  $grouping
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grouping $grouping)
    {
        $grouping->delete();
        return redirect(route('grouping.index'));
    }
}
