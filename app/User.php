<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function company()
    {
        return $this->hasOne(Company::class, "manager_id");
    }
    public function products()
    {
        return $this->hasMany(Product::class, "supplier_id");
<<<<<<< HEAD
    }
    public function request()
=======

    }
    public function requests()
>>>>>>> 75f001f4f9955d05d3aab7cd0defe620ed928d24
    {
        return $this->hasMany(Request::class, "buyer_id");
    }

  
}
