<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['parent_id'
        , 'approved'
        , 'name'
        , 'email'
        , 'mobile'
        , 'website'
        , 'body'
        , 'ip'
        , 'commentable_id'
        , 'commentable_type'
    ];

    public function commentable()
    {
        return $this->morphTo();
    }

    public function setCommentAttribute($value)
    {
        $this->attributes[$value] = str_replace(PHP_EOL,'<br>',$value);
    }
}
