<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function subject()
    {
        return  $this->belongsTo('App\Models\Subject');
    }
}
