<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intro extends Model
{
    protected $fillable = [
        'first_message',
        'welcome_message',
        'short_description',
        'bg-video',
        'bg-image-one',
        'bg-image-two',
    ];
}
