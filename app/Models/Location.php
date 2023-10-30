<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    protected $fillable = [
        'country',
        'state',
        'city',
        'coordinate',
    ];
    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}
