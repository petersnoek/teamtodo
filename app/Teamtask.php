<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teamtask extends Model
{
    public function todos()
    {
        return $this->belongsTo(Teamtodo::class);
    }

}
