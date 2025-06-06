<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function userInfo(){
        return view('admin.pages.user-info');
    }

    public function userAuth(){
        return view('admin.pages.user-auth');
    }

    public function challenge(){
        return view('admin.pages.challenge');
    }

    public function challengeFree(){
        return view('admin.pages.challnege-free');
    }

    public function challengeBuying(){
        return view('admin.pages.challenge-buying');
    }

    public function challengeOrder(){
        return view('admin.pages.challenge-order');
    }

    public function wallet(){
        return view('admin.pages.wallet');
    }
}
