<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Freelancer_skills extends Model
{
    use HasFactory;
    protected $fillable = [
        'freelancer_id',
        'skill_list_id',
    ];

    // Freelancer relationship
    public function freelancer()
    {
        return $this->belongsTo(Freelancers::class);
    }

    // SkillList relationship
    public function skillList()
    {
        return $this->belongsTo(Skill_lists::class);
    }
}
