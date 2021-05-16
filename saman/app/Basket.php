<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    protected $guarded = [];

    public function price()
    {
        return $this->belongsTo(Price::class);
    }
}
