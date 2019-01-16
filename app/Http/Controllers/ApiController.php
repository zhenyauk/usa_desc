<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cat;
class ApiController extends Controller
{
    public function getCats()
    {
        $cats = Cat::get();
        return json_encode($cats);
    }
}
