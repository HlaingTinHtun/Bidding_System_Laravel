<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = "product_category";

    protected $fillable = ['id', 'name', 'slug', 'created_at', 'updated_at'];

    public function Product()
    {
        return $this->hasMany('App\Product');
    }

    public static function boot()
    {
        parent::boot(); // TODO: Change the autogenerated stub

        static::creating(function ($cat) {

            $cat->slug = str_slug($cat->name);

            if (static::whereSlug($cat->slug)->exists()) {
               $cat->slug .= '-' . uniqid();
            }

        });
    }
}
