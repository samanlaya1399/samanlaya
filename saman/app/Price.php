<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $guarded = [];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function color()
    {
        return $this->belongsTo(Color::class);
    }
    public function size()
    {
        return $this->belongsTo(Size::class);
    }

    public function basket()
    {
        return $this->hasMany(Basket::class);
    }

    public function Notify()
    {
        return $this->hasMany(Notify::class);
    }

}
