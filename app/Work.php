<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Company;
use LaravelAdminPanel\Models\Category;

class Work extends Model
{
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function companyId()
    {
        return $this->belongsTo(Company::class);
    }


    public function categoryId(){
        return $this->hasOne(Category::class);
    }


}
