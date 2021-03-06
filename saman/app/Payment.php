<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $guarded = [];

    public function factor()
    {
        return $this->belongsTo(Factor::class);
    }
}
