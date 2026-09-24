<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EducationTimeline extends Model
{
    protected $fillable = [
        'institution',
        'major',
        'year_start',
        'year_end',
        'description_id',
        'description_en',
    ];
}
