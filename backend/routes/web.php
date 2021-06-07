<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

//ホームページのTOP
Route::GET('/home', 'App\Http\Controllers\SampleController@home')->name('home');

//書き込まれた内容をModelに保存するためのページ
Route::POST('/homes','App\Http\Controllers\SampleController@homes')->name('homes');
//書き込まれた内容をModelに保存するためのページ２
Route::PUT('/homecount','App\Http\Controllers\SampleController@homecount')->name('homecount');

//ホームページの掲示板に書き込まれた値を変更したい場合
Route::GET('/change_in', 'App\Http\Controllers\SampleController@change_in')->name('change_in');
//ホームページの掲示板に書き込まれた値を変更を更新する場合
Route::PUT('/change_out', 'App\Http\Controllers\SampleController@change_out')->name('change_out');

//書き込まれたメッセージをidを元に削除するためのページ
Route::POST('/delete','App\Http\Controllers\SampleController@delete')->name('delete');

//掲示板のTOPページ
Route::GET('/communication_top', 'App\Http\Controllers\ComminucationController@communication_top')->name('communication_top');
//掲示板に書き込まれた内容をModelに保存するためのページ
Route::POST('/communication_create','App\Http\Controllers\ComminucationController@communication_create')->name('communication_create');
//掲示板に書き込まれた内容を保存し、表示&元のページに戻ってくる
Route::PUT('/communication_create_terminate','App\Http\Controllers\ComminucationController@communication_create_terminate')->name('communication_create_terminate');

//ペン画のホームページ
Route::GET('/pen', 'App\Http\Controllers\SampleController@pen')->name('pen');

//計算機で（文字入力や、単位）をするページ
Route::GET('/calc', 'App\Http\Controllers\SampleController@calc')->name('calc');
//計算機の計算結果を求めるページ
Route::POST('/total', 'App\Http\Controllers\SampleController@total')->name('total');

//サイコロを振る（ランダムで値を生成する）するページ
Route::GET('/daice', 'App\Http\Controllers\SampleController@daice')->name('daice');
//サイコロの出た目（ランダムで生成した値を取得し、表示する）するページ
Route::POST('/daice2', 'App\Http\Controllers\SampleController@daice2')->name('daice2');

//カードを開くするページ
Route::GET('/card', 'App\Http\Controllers\SampleController@card')->name('card');
//カードパックの中身するページ
Route::POST('/card_open', 'App\Http\Controllers\SampleController@card_open')->name('card_open');

//誕生日入力するページ
Route::GET('/happybithday', 'App\Http\Controllers\SampleController@happybithday')->name('happybithday');
//誕生日表示するページ
Route::POST('/happy', 'App\Http\Controllers\SampleController@happy')->name('happy');

//八百屋で果物などの数を選ぶページ
Route::GET('/greengrocer', 'App\Http\Controllers\SampleController@greengrocer')->name('greengrocer');
//八百屋で選んだものの合計を出力するページ
Route::POST('/greengrocer_total', 'App\Http\Controllers\SampleController@greengrocer_total')->name('greengrocer_total');

//雑学クイズのホームページ
Route::GET('/quizu/{id}', 'App\Http\Controllers\SampleController@quizu')->name('quizu{id}');

//カイジのEカード
Route::GET('/e_card/{id}', 'App\Http\Controllers\SampleController@e_card')->name('e_card{id}');

//歌詞当てクイズ
Route::GET('/song_quizu/{id}', 'App\Http\Controllers\SampleController@song_quizu')->name('song_quizu{id}');

