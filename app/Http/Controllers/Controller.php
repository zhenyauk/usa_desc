<?php

namespace App\Http\Controllers;

use App\Menu;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $data = [
        'meta_d' => '',
        'meta_c' => ''
    ];
    public function __construct()
    {
        $this->menus();
    }

    public function secure($name)
    {
        $name = strip_tags($name);
        $name = htmlentities($name, ENT_QUOTES, "UTF-8");
        $name = htmlspecialchars($name, ENT_QUOTES);
        return $name;
    }

    public function menus()
    {
        $this->data['menu']['resource'] = Menu::where('name', 'ResourcesMenu')->first();
        $this->data['menu']['community'] = Menu::where('name', 'CommunityMenu')->first();
    }
}
