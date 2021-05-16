<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['approved'
        , 'name'
        , 'subject'
        , 'email'
        , 'website'
        , 'mobile'
        , 'body'
        , 'ip'
    ];


}
