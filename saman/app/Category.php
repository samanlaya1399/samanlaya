<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use Sluggable;

    protected $fillable = ['id' , 'name'];

    public function articles()
    {
        return $this->belongsToMany(Article::class);
    }




    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
       return [
         'slug' => [
             'source' => 'name'
         ]
       ];
    }


    public function path()
    {
        return "/category/$this->slug";
    }
}
