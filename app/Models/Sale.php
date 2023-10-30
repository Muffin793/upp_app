<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $fillable =[
        'quantitye',
        'total_withput_iva',
        'iva',
        'total_with_iva',
    ];

    public function product(){
        return $this->belongsTo(App\Models\Product::class);
    }
}
