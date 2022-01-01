<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomePageContactArea extends Model
{
    protected $fillable = [
        'service_title',
        'service_description',
        'course_title',
        'course_description',
    ];
}
