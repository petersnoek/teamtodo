<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['content', 'todo'];
    public function todo()
    {
        //$todo->task
        //        return $this->belongsTo(::class);
    }
}
