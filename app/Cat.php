<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    protected $table = 'categories';

    public function works()
    {
        return $this->belongsTo(Work::class);
    }


}
