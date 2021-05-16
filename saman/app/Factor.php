<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factor extends Model
{
    protected $guarded = [];

    protected $casts = [
        'detail' => 'array'
    ];

    public function details()
    {
        return $this->hasMany(Detail::class);
    }

    public function status()
    {
        return $this->hasMany(Status::class);
    }

    public function payment()
    {
        return $this->hasMany(Payment::class);
    }

    public function user()
    {
        return $this->belongsTo(user::class);
    }

    public function address()
    {
        return $this->belongsTo(Address::class);
    }
}
