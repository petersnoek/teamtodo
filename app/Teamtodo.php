<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teamtodo extends Model
{
    protected $fillable = [
        'name'
    ];

    public function teams()
    {
        return $this->belongsTo(Team::class);
    }
}
