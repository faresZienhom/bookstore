<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    protected $fillable =  ['title','descreption','image','author','price','discount','quantity','product_code','page_number','categories_id'];

    function category()
    {
        return $this->belongsTo(Categories::class,'categories_id');

    }
    function wishlist()
    {
        return $this->hasMany(Wishlist::class);
    }

}
