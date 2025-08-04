<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description'
    ];

    public function posters()
    {
        return $this->belongsToMany(Poster::class, 'poster_profession');
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
