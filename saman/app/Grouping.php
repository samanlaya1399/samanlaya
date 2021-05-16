<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Grouping extends Model
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
        return "/grouping/$this->slug";
    }

    public function type()
    {
        return $this->hasMany(Type::class,'group_id','id');
    }
}
