<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
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
        return "/type/$this->slug";
    }

    public function grouping()
    {
        return $this->belongsTo(Grouping::class,'group_id','id');
    }

    public function product()
    {
        return $this->hasMany(Product::class);
    }

    public function property()
    {
        return $this->hasMany(Property::class);
    }
}
