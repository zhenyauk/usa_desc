<?php

namespace App\Http\Controllers;

use App\Cat;
use Illuminate\Http\Request;
use App\Work;
use Illuminate\Support\Facades\Auth;
class JobController extends Controller
{

    //Show Jobs
    public function index()
    {

    }

    public function register()
    {
        $this->data['maincats'] = Cat::take(6)->get();
        $this->data['allcats'] = Cat::get();
        if(Auth::check()) return $this->AddJobReg();
        return $this->AddJobUnreg();
    }

    //Add job and register
    public function AddJobUnreg()
    {
        return view('pages.addjob-unreg', $this->data);
    }

    //Add job if already user
    public function AddJobReg()
    {
        return view('pages.addjob-reg', $this->data);
    }

    public function postAddReg(Request $request)
    {
        dd($request->all());
    }

    public function postAdd(Request $request)
    {
        dd($request->all());
    }





}
