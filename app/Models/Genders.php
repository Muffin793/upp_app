<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Genders extends Model
{
    use HasFactory;

    public function users():HasOne
    {
        return $this->hasMany(Video::class);
    }
}
