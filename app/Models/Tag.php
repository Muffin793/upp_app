<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Tag extends Model
{
    use HasFactory;
    public function users()
{
    return $this->morphedByMany(User::class, 'taggable');
    
}
public function posts(): MorphToMany
{
    return $this->morphedByMany(User::class, 'taggable');
    
}
public function videos()
{
    return $this->morphedByMany(User::class, 'taggable');
    
}

}
