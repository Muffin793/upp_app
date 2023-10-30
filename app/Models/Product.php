<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function brand(){

        return $this->hasOne(Brand::class);
    }

    public function category(){
        return $this->hasOne(Category::class);

    }
    
    public function sku(){
        return $this->hasMany(App\Models\Sku::class);
    }

    public function price(){
        return $this->hasOne(App\Models\Price::class);
    }
    
    public function stock(){
        return $this->hasOne(App\Models\Stock::class);
    }

    public function sale(){
        return $this->hasMany(App\Models\Sale::class);
    }
}


