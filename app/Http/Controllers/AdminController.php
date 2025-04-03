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
}
