<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Freelancers extends Model
{
    use HasFactory;


    // Fillable attributes
    protected $fillable = [
        'certificate',
        'graduation_year',
        'portfolio',
        'educational_files',
        'experiance',
        'college',
        'educational_status_id',
        'user_id',
    ];

    // Cast JSON fields
    protected $casts = [
        'certificate' => 'array',
        'portfolio' => 'array',
    ];

    // Define the relationship with the EducationalStatus model
    public function educationalStatus()
    {
        return $this->belongsTo(Educational_status::class);
    }

    // Define the relationship with the User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function skills()
{
    return $this->belongsToMany(Skill_lists::class, 'freelancer_skills');
}
}


