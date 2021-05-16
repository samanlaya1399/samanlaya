<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, HasRole;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'mobile', 'password','email','active',
        'first_name','phone','national_code','gender','avatar'
    ];

    protected $casts = [
        'avatar' => 'array'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function article()
    {
        return $this->hasMany(Article::class);
    }
    public function product()
    {
        return $this->hasMany(Product::class);
    }
    public function basket()
    {
        return $this->hasMany(Basket::class);
    }
    public function activation()
    {
        return $this->hasMany(ActivationCode::class);
    }

    public function payment()
    {
        return $this->hasMany(Payment::class);
    }

    public function address()
    {
        return $this->hasMany(Address::class);
    }
    public function notifyme()
    {
        return $this->hasMany(Notify::class);
    }

    public function discount()
    {
        return $this->hasMany(Discount::class);
    }
    
    public function offer()
    {
        return $this->hasMany(Offer::class);
    }


    public function course()
    {
        return $this->hasMany(Course::class);
    }
    public function information()
    {
        return $this->hasMany(Information::class);
    }

    public function isAdmin()
    {
        return $this->level == 'admin' ? true : false;
    }

}
