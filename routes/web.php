<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// LP獲得用
Route::get('app', function () {
    return view('fb.check'); //確認用LP
    // return view('fb.noMatch'); //獲得LP(2)
    
    // return view('fb.adult'); //獲得LP(3)
    // return view('fb.noMatchRanking'); //獲得LP(3)
    // return view('fb.match'); //獲得LP(1)
});

// LP確認用
Route::get('cccheck', function () {
    return view('fb.noMatch'); //獲得LP(2)
    
    // return view('fb.mm'); //獲得LP(4)
    // return view('fb.adult'); //獲得LP(3)
    // return view('fb.noMatchRanking'); //獲得LP(3)
    // return view('fb.match'); //獲得LP(1)
});