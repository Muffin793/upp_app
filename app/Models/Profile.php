<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'instragram',
        'github',
        'web',

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
        }
        public function location()
        {
            return $this->hasOne(Location::class);
            }
            public function profileable()
            {
                return $this->morphTo(Location::class);
                } 
                
}
