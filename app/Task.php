<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['content', 'todo'];

    public function todos()
    {
        return $this->belongsTo(Todo::class);
    }
}
