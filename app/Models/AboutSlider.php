<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutSlider extends Model
{
    protected $fillable = [
        'about_slider_image',
        'about_slider_title',
        'about_slider_description',
    ];
}
