<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    use HasFactory;

    protected $fillable = [
      'season_number',
      'serie_id',
      'number_of_episodes'
    ];

    public function serie()
    {
        return $this->belongsTo(Serie::class);
    }

 }
