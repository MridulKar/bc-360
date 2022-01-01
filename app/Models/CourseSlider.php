<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseSlider extends Model
{
    protected $fillable = [
        'heading-image',
        'slider_img',
        'slider_title',
        'slider_description',
        'subtitle',
        'title',
        'image',
        'course_title',
        'description',
        'coursebox_subject',
        'coursebox_topic',
        'coursebox_students',
    ];
}
