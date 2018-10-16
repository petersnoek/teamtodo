<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['content', 'todo_id'];

    public function todos()
    {
        return $this->belongsTo(Todo::class);
    }
}
