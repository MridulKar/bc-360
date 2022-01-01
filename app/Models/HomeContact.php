<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeContact extends Model
{
    protected $fillable = [
        'contact_title',
        'contact_description',
        'contact_button',
    ];
}
