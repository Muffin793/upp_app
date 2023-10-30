<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sku extends Model
{
    use HasFactory;

    protected $fillable =[
        'measurement_unir',
        'quantity',
    ];

    public function product(){
        return $this->hasOne(App\Models\Product::class);
    }
}
