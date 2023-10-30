<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone_number',
      
    ];

    public function phone()
    {
        return $this->morphTo(App\Models\phone,phoneable);
    }

    public function phoneable()
    {
        return $this->morphTo();
    }   
    public function user()
    {
        return $this->belongsTo(User::class);
        }
}
