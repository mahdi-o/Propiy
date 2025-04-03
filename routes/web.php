<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;



Route::get('/admin-user-info',[AdminController::class,'userInfo'])->name('user.info');

Route::get('/admin-user-auth',[AdminController::class,'userAuth'])->name('user.auth');

Route::get('/', function () {
    return view('admin.pages.dashboard');
});


Route::get('/dashboard',function(){
    return view('admin.pages.dashboard');
})->name('dashboard');

Route::get('/tables',function(){
    return view('admin.pages.tables');
})->name('tables');
    
Route::get('/billing',function(){
    return view('admin.pages.billing');
})->name('billing');

Route::get('/virtual-reality',function(){
    return view('admin.pages.virtual-reality');
})->name('virtual');

Route::get('/rtl',function(){
    return view('admin.pages.rtl');
})->name('rtl');

Route::get('/profile',function(){
    return view('admin.pages.profile');
})->name('profile');

Route::get('/signIn',function(){
    return view('admin.pages.sign-in');
})->name('signIn');

Route::get('/signUp',function(){
    return view('admin.pages.sign-up');
})->name('signUp');
                    
                                                            