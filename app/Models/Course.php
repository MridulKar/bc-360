<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    
   
   
    
   

    protected $fillable = [
        'heading_image',
        'subtitle',
        'title',
        'main_title',
        'description',
    ];
}
