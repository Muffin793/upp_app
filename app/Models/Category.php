<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;
   
    public function posts ():HasMany
    {
        return $this->HasMany(App\Models\Post::class);
    }
   
    public function videos():HasMany
    {
        return $this->hasMany(Video::class);
    }

    public function product(){
        return $this->hasMany(App\Models\Product::class);
    }
}
