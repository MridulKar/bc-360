<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoodStory extends Model
{
    protected $fillable = [
        'success_rate',
        'happy_students',
        'project_done',
        'awards',
        'video_image',
        'video_link',
    ];
}
