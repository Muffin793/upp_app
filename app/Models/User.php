<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'country_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }   
    public function phone ()
    {
        return $this->morphOne(Phone::class,'phoneable');
    } 

    public function level()
    {
        return $this->belongsTo(Level::class);

    }

    public function location()
    {
        return $this->hasOneTrough(Location::class,Profile::class);
    
    }

    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    
    }

    public function comments():HasMany
    {
        return $this->hasMany(Comment::class);
    
    } 

    public function image():MorphOne
    {
        return $this->morphOne(Image::class, 'imageable');
    
    }


    public function country()
    {
        return $this->belongsTo(Country::class);
        // Agregar la relación de usuario a país
    }   

    public function githubAccount()
    {
        return $this->hasMany(GitHub_account::class);
    }
    
    public function groups()
    {
        return $this->belongsToMany(Group::class, 'group_users', 'user_id', 'group_id');
    }

    public function gender()
    {
        return $this->belongsTo(Gender::class);
    }
}