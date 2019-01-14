<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;
use App\Work;

class Company extends Model
{
    protected $table = 'companies';

    public function works()
    {
        return $this->hasMany(Work::class);
    }

    public function userId()
    {
        return $this->belongsTo(User::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
