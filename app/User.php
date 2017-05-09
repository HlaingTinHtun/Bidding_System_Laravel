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

    public function bidder()
    {
        return $this->belongsTo('App\Bid');
    }

    public function hasBidsOnProducts()
    {
        return $this->belongsTo('App\Product');
    }
}
