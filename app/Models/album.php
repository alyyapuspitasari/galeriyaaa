<?php

namespace App\Models;

use App\Models\foto;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class album extends Model
{
    use HasFactory;
    protected $fillable = [
        'users_id',
        'nama_album',
    ];

    protected $table = 'album';
    public function foto()
    {
        return $this->hasMany(foto::class, 'album_id', 'id');
    }
    public function user()
    {
        return $this->hasMany(foto::class, 'users_id', 'id');
    }
}
