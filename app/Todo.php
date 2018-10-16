<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = ['name', 'user_id'];
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}


