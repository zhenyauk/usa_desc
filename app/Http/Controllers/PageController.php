<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LaravelAdminPanel\Models\Page;
use App\Staticpage;
class PageController extends Controller
{


    public function index()
    {
        $this->data['page'] = Staticpage::where('slug', 'home')->first();
        return view('pages.main', $this->data);
    }



    //get custom page @see web.php
    public function customPage($slug)
    {
        $page = Page::where('slug', $slug)->firstOrFail();
        $data['page'] = $page;
        return view('pages.page');
    }
}
