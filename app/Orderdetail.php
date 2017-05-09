<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orderdetail extends Model
{
    protected $table = "order_details";

    protected $fillable = ['id','order_id','quantity','price_each','created_at','updated_at'];
}
