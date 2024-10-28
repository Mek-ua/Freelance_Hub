<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'attached_file',
        'price',
        'user_id',
    ];

    // Define the relationship with the User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function skills()
{
    return $this->belongsToMany(Skill_lists::class, 'project_skills');
}
}

