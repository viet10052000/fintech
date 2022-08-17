<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcribe extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'expert_id',
        'is_accepted'
    ];
}
