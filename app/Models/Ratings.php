<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ratings extends Model
{
    use HasFactory;
    protected $fillable = [
        'taker_id',
        'giver_id',
        'project_id',
        'amount',
        'comment',
    ];
}
