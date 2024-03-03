<?php

namespace App\Models;

use App\Models\foto;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class like extends Model
{
    use HasFactory;

    protected $fillable = [
        'users_id',
        'foto_id',
    ];
    protected $table = 'like';

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
    public function foto()
    {
        return $this->belongTo(foto::class, 'foto_id', 'id');
    }
}
