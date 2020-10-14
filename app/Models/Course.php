<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    // we defined the table name here because by default laravel assume the table name is the pluralized model name
    protected $table= "course"; 
}
