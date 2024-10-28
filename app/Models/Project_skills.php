<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project_skills extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_id',
        'skill_list_id',
    ];

    // Relationship to Project
    public function project()
    {
        return $this->belongsTo(Projects::class);
    }

    // Relationship to SkillList
    public function skillList()
    {
        return $this->belongsTo(Skill_lists::class);
    }
}
