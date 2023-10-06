<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
    public function users(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function categories(){
        return $this->belongsTo(categories::class,'category_id');
    }



}
