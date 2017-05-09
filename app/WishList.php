<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WishList extends Model
{
    protected $table = "wish_list";

    protected $fillable = ['id','name','user_id','product_id','created_at','updated_at'];

    public function Product()
    {
        return $this->belongsTo('App\WishList', 'product_id', 'id');
    }
    public function User()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

}
