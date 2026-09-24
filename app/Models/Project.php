<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title_id',
        'title_en',
        'description_id',
        'description_en',
        'tech_stack',
        'image_url',
        'demo_link',
        'github_link',
        'is_featured',
    ];
}
