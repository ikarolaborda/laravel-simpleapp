<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    use HasFactory;

    protected $fillable = [
      'episode_number',
      'season_number',
      'episode_title'
    ];

    public function seasons()
    {
        return $this->belongsTo(Season::class);
    }

    public function serie()
    {
        return $this->hasOneThrough(Serie::class,Season::class);
    }
}
