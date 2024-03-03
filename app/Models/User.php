<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\foto;
use App\Models\like;
use App\Models\album;
use App\Models\komen;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        'name_lengkap',
        'alamat',
        'picture',
        'bio'
    ];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token'
    ];
        //relasi ke album
    public function album()
    {
        return $this->hasMany(album::class,'users_id','id');
    }
    //relasi ke komenfoto
    public function comment()
    {
        return $this->hasMany(komen::class,'users_id','id');
    }
    //foto
   public function foto()
   {
    return $this(foto::class, 'users_id', 'id');
   }
    //relasi ke likefoto
    public function like()
    {
        return $this->hasMany(like::class,'users_id','id');
    }

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
