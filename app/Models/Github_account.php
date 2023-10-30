<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Github_account extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'github_id', 'github_token', 'github_refresh_token',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
