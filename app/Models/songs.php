<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class songs extends Model
{
    use HasFactory;
    protected $fillable = [
        'artist_id','songname', 'genre', 'author', 'background_image', 'album', 
        'date_registered', 'info', 'info2', 'info3', 'image', 'audio',
        'file_path'
    ];

    
  
}

