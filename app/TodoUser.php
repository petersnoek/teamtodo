<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TodoUser extends Model
{
    protected $fillable = ['todo_id', 'user_id'];
    protected $table = 'todousers';
    public $timestamps = false;
}
