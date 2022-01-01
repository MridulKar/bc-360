<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseCard extends Model
{
    protected $fillable = [
        'course_detail_id',
        'coursecard_subject_one',
        'coursecard_topic_one',
        'coursecard__others_one',
        'coursecard_subject_two',
        'coursecard_topic_two',
        'coursecard__others_two',
        'coursecard_subject_three',
        'coursecard_topic_three',
        'coursecard__others_three',
    ];
}
