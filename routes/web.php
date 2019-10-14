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

//メインページルート
Route::get('/','MainController@index')->name('index');

//ログアウトルート
Route::get('/logout','MainController@logout')->name('logout');

//Auth認証ルート
Auth::routes();

Auth::route(['verify' => true]);

//Detailルート
Route::get('/detail','MainController@detail');

Route::middleware('auth')->group(function(){
    //マイページルート
    Route::get('/mypage','MainController@mypage')->name('mypage');
    Route::get('/mypageDetail/{user}','MainController@mypageDetail');

    //投稿のリソースフルルート
    Route::resource('/post','TextController');

    //エントリー申請ルート
    Route::post('/entory','MainController@entory')->name('entory');

    //エントリー合否
    Route::post('/decision','MainController@decision')->name('decision');

    //お知らせページルート
    Route::get('/news','MainController@news')->name('news');

    //記事投稿ルート
    Route::get('/create','MainController@create')->name('create');

    //記事削除ルート
    Route::get('/delete/{id}','MainController@delete')->name('delete');

    //記事編集ルート
    Route::get('/update/{id}','MainController@update')->name('update');

    //セッティングページルート
    Route::get('/setting','MainController@setting');

    //ユーザーリソースフルルート
    Route::resource('/user','UserController');

    //退会ページルート
    Route::get('/withdrawal','MainController@withdrawal')->name('withdrawal');
});


