<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin',function(){
return view('admin.dashboard');
})->name('dashboard');


Route::get('/tables',function(){
    return view('admin.tables');
    })->name('tables');
    
    
    Route::get('/index',function(){
        return view('admin.index');
        })->name('index');

                    
                                                            