<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use Sluggable;
    protected $guarded = [];

    protected $casts = [
        'images' => 'array',
        'gallery1' => 'array',
        'gallery2' => 'array',
        'gallery3' => 'array',
        'gallery4' => 'array'
    ];

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
        return "/product/$this->slug";
    }



    public function type()
    {
        return $this->belongsTo(Type::class);
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function price()
    {
        return $this->hasMany(Price::class,'product_id','id');
    }
    public function value()
    {
        return $this->hasMany(Value::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

}
