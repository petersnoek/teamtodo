<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['content', 'todo'];

    public function todo()
    {
        //$to
        return $this->belongsTo(Todo::class);
    }
}
