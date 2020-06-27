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

Route::get('job', function () {
    // return view('fb.check'); //仮LP
    return view('fb.job'); //獲得用LP
});

//イククル-DL
Route::get('app', function () {
    return view('fb.app1'); //自動遷移LP。ココに案件タグを設置
});

//popo
Route::get('install', function () {
    return view('fb.install'); //自動遷移LP。ココに案件タグを設置
});

// LP確認用
Route::get('cccheck', function () {
    return view('fb.job'); //獲得LP
});

// //男性向け出会えない系 - 獲得用
// Route::get('app', function () {
//     return view('fb.check'); //仮LP
//     // return view('fb.live'); //獲得LP
// });
// //男性向け出会えない系 - DL遷移用
// Route::get('dl', function () {
//     return view('fb.dl'); //自動遷移LP。ココに案件タグを設置
// });