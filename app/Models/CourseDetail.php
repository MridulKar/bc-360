<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseDetail extends Model
{
    protected $fillable = [
        'link',
        'course_page_heading_image',
        'course_page_subtitle',
        'course_page_title',
        'course_image',
        'course_title',
        'course_description',
        'course_description_more',
        'coursecard_subject',
        'coursecard_topic',
        'coursecard_others',

    ];
}
