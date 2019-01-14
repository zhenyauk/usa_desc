<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LaravelAdminPanel\Models\Page;

class PageController extends Controller
{
    public function index()
    {
       return view('pages.main');
    }



    //get custom page @see web.php
    public function customPage($slug)
    {
        $page = Page::where('slug', $slug)->firstOrFail();
        $data['page'] = $page;
        return view('pages.page');
    }
}
