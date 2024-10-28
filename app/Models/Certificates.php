<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificates extends Model
{
    use HasFactory;
    protected $fillable = [
        'freelancer_id',
        'title',
        'company_name',
        'photo',
    ];

    // Define the relationship with the Freelancer model
    public function freelancer()
    {
        return $this->belongsTo(Freelancers::class);
    }
}
