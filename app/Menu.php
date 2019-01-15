<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Menu_item;
class Menu extends Model
{
    protected $table = 'menus';

    public function items()
    {
        return $this->hasMany(Menu_item::class);
    }
}
