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

Route::get('app', function () {
    return view('fb.check'); //仮LP
    // return view('fb.live'); //獲得LP
});

Route::get('dl', function () {
    return view('fb.dl'); //自動遷移LP。ココに案件タグを設置
});

// LP確認用
Route::get('cccheck', function () {
    return view('fb.live'); //獲得LP
});
