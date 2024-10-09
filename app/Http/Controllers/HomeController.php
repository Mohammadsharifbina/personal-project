<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function redirect(){
        $userType = Auth::user()->userType;
        
        if($userType == '1'){
            return view('admin.home');
        }else {
            return view('dashboard');
        }
    }
    public function setLang($locale){
        App::setLocale($locale);
        Session::put('locale',$locale);
        return redirect()->back();
    }
}
