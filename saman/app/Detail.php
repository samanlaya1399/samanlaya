<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $guarded = [];

    public function price()
    {
        return $this->belongsTo(Price::class,'stock_id','id');
    }
}
