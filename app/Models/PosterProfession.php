<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PosterProfession extends Model
{
    use HasFactory;

    protected $fillable = [
        'profession_id',
        'poster_id'
    ];
}