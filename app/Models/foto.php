<?php

namespace App\Models;

use App\Models\like;
use App\Models\User;
use App\Models\album;
use App\Models\komen;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class foto extends Model
{
    use HasFactory;

    protected $fillable = [
        'users_id',
        'judul_foto',
        'album_id',
        'deskripsi_foto',
        'lokasi_file',
    ];

    protected $table = 'foto';

    //relasi
    public function like()
    {
        return $this->hasMany(like::class, 'foto_id', 'id');
    }
    public function komen()
    {
        return $this->hasMany(komen::class, 'foto_id', 'id');
    }
    public function album()
    {
        return $this->belongTo(album::class, 'album_id', 'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
}
