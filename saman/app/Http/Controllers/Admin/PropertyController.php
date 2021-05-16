<?php

namespace App\Http\Controllers\Admin;

use App\Property;
use App\Type;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'لیست نوع محصولات';
        $brands = Type::all();
        return view('panel.property.alltype',compact('title','brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'ثبت ویژگی';
        $types = Type::all();

        return view('panel.property.create',compact('title','types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $property = Property::create(['title'=>$request->title,'description'=>$request->description,'type_id'=>$request->type_id]);
        return redirect(route('allpro.index',['id'=>$property->type->id]));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function show(Property $property)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property)
    {
        $title = 'ویرایش ویژگی محصول';
        $types = Type::all();

        return view('panel.property.edit',compact('title','property','types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Property $property)
    {
        $inputs = $request->all('title','description','type_id');
        $property->update($inputs);
        return redirect(route('allpro.index',['id'=>$property->type->id]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property $property)
    {
        $property->delete();
        return back();
    }

    public function allproperty(Type $type)
    {
        $title = ' ویژگی های '.$type->title;
        $brands = Property::where('type_id','=',$type->id)->get();
        return view('panel.property.allpro',compact('title','brands','type'));
    }
}
