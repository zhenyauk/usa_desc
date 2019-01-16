<?php

namespace App\Http\Controllers;

use App\Cat;
use App\Company;
use App\Email as Emailme;
use App\Helpers\_Function;
use App\User;
use Illuminate\Http\Request;
use App\Work;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManagerStatic as Image;

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

    //Registred USER
    public function postAddReg(Request $request)
    {
        $company = Company::find(Auth::id());
        //Compose work
        $work = new Work;
        $work->title = $request->title;
        $work->category_id = $request->has('category2') ?
            $this->getCategoryId($request->category2) : $this->checkCat($request->category);
        $work->company_id = $company->id;
        $work->description = $request->description;
        $work->apply = $request->apply;
        $work->active = 1;
        $work->contract = isset($request->contract) ? 1 : 0;
        $work->from = date('Y-m-d');
        $work->save();
    }

    //Unregister first time
    public function postAdd(Request $request)
    {

        //compose Logo image
        if( $request->has('photo') ){
            if( $request->file('photo')->getClientSize() < 54117814 ){
                $logo = $this->photo($request);
            }
        }

        if( $user = User::where('email', $request->email)->first() ){
           return back()->with(['message'=>'email already exist']);
        }

        //compose user
        $password = _Function::makePass();
        $user = new User;
        $user->name = $request->company;
        $user->email = $request->email;
        $user->password = bcrypt($password);
        $user->save();

        //compose email
        $email = new Emailme;
        $email->email = $user->email;
        $email->password = $password;
        $email->user_id = $user->id;
        $email->save();

        //compose company
        $company = new Company;
        $company->user_id = $user->id;
        $company->title = $request->company;
        $company->slug = _Function::seo_slug($request->company);
        $company->statement = $request->statement;
        $company->head = $request->headquarters;
        $company->logo = isset($logo) ? $logo : null;
        $company->location = $request->location;
        $company->site = $request->site;
        $company->description = $request->description;
        $company->active = 1;
        if(! $company->save() ) return back();

        //Compose work
        $work = new Work;
        $work->title = $request->title;
        $work->category_id = $request->has('category2') ?
            $this->getCategoryId($request->category2) : $this->checkCat($request->category);
        $work->company_id = $company->id;
        $work->description = $request->description;
        $work->apply = $request->apply;
        $work->active = 1;
        $work->contract = isset($request->contract) ? 1 : 0;
        $work->from = date('Y-m-d');
        $work->save();

    }

    public function photo($request)
    {
        if ($request->hasFile('photo')) {

            $file = $request->file('photo');
            $filename = $file->getClientOriginalName();
            $filename = mt_rand(1, 99) . $filename;
            $location = public_path() . "/storage/companies/" . $filename;
            $img = Image::make($file);
            $img->resize(800, null, function ($constraint) {
                $constraint->upsize();
                $constraint->aspectRatio();
            })->save($location);
            return 'companies/' . $filename;
        }
    }

    public function getCategoryId($name)
    {
        if( $cat = Cat::where( 'name', strip_tags(trim($name)) )->first() ) return $cat->id;
        return false;
    }

    public function checkCat($cat = '')
    {
        if($cat == '') return false;
        return $cat;
    }



}
