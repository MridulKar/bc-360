<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
      
        'cat_id',
        'image',
        'heading_image',
        'subtitle',
        'title',
        'description',
        'bdetail_subtitle',
        'bdetail_image',
        'bdetail_title',
        'bdetail_blog_title',
        'bdetail_location',
        'bdetail_description',
        'bdetail_time',
        'bdetail_phone_number',
     ];
}
