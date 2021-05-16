<?php

namespace App\Http\Controllers;

use App\Basket;
use App\Price;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->check()){
          $basket = Basket::where('user_id','=',auth()->id())->get();
          return compact('basket');
        }else{
          return null;
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        auth()->user()->basket()->create(array_merge($request->all('price_id',['version'=>Price::find($request->price_id)->version])));
        $action = 'ok';
        return compact('action');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Basket  $basket
     * @return \Illuminate\Http\Response
     */
    public function show(Basket $basket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Basket  $basket
     * @return \Illuminate\Http\Response
     */
    public function edit(Basket $basket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Basket  $basket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Basket $basket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Basket  $basket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Basket $basket)
    {
        //
    }

    public function add($price_id,$number)
    {


        if (auth()->check()) {
            if (Basket::where(['user_id' => auth()->id(), 'price_id' => $price_id])->first() == null){
                if(Price::whereId($price_id)->first()->stock > 0 || Price::whereId($price_id)->first()->major_stock > 0){
                    Basket::create(['user_id' => auth()->id(), 'price_id' => $price_id, 'number' => $number,'version'=>Price::find($price_id)->version]);
                    return back();
                }else{
                    return back();
                }

            }else{
                $basket = Basket::where(['user_id' => auth()->id(), 'price_id' => $price_id])->first();
                $num = $basket->number;
                $number = $number+$num;
                $basket->number = $number;
                if(Price::whereId($price_id)->first()->stock >= $number){
                    $basket->save();
                    return back();
                }else{
                    return back();
                }

            }

        }

    }

    public function remove($id)
    {
        if (auth()->check()) {
           $mybasket = Basket::whereId($id)->first();
           $mybasket->delete();
           return back();

        }
    }
}
