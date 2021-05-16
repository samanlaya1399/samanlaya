<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{

    use Sluggable;
    protected $guarded = [];


    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function path()
    {
        return "/property/$this->slug";
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
