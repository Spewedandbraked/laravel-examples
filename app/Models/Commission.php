<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commission extends Model
{
    use HasFactory;

    protected $fillable = [
        'poster_id',
        'publisher_id',
        'task_description',
        'deadline',
        'reward_amount'
    ];

    protected $casts = [
        'deadline' => 'datetime',
        'reward_amount' => 'decimal:2'
    ];

    public function poster()
    {
        return $this->belongsTo(Poster::class);
    }

    public function publisher()
    {
        return $this->belongsTo(User::class, 'publisher_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'commission_user');
    }
}
