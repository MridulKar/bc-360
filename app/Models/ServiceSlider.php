<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceSlider extends Model
{
    protected $fillable = [
        'service_id',
        'slider_img',
        'slider_title',
        'slider_description',
    ];
}
