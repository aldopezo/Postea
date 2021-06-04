<?php

namespace App\Models;

use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;


class Post extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title', 'image', 'content' 
    ];  
}
