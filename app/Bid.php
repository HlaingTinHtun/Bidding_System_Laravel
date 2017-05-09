<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    //
    protected $table = "products";

    protected $fillable = ['id','amount','bidded_at','product_id','slug','bidder_id','created_at','updated_at'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->hasOne('App\Product', 'product_id');
    }

    public function user_Bidder()
    {
        return $this->hasOne('App\User', 'bidder_id');
    }

    public function bidSuccessfulOnProduct()
    {
        return $this->belongsTo('App\Product');
    }

}
