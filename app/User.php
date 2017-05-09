<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $roleName = ['guest','admin','dealer','buyer'];    
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'name', 'email', 'password', 'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function whichRole()
    {
        return $this->roleName[$this->role];
    }

    public function Wishlist()
    {
        return $this->hasMany('App\WishList');
    }

}
