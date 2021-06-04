<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'title', 'artist_group', 'release_date', 'track', 'cover' 
    ];  
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

}
