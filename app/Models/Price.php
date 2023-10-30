<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    protected $fillable =[
        'sell_price',
        'buy_price',
    ];

    public function product(){
        return $this->belongsTo(App\Models\Product::class);
    }
}
