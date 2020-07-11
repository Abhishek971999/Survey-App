<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/questionaire/create', 'QuestionaireController@create');
Route::post('/questionaire', 'QuestionaireController@store');
Route::get('/questionaire/{questionaire}', 'QuestionaireController@show');

Route::get('/questionaire/{questionaire}/question/create','QuestionController@create');
Route::post('/questionaire/{questionaire}/question','QuestionController@store');
Route::delete('/questionaire/{questionaire}/question/{question}','QuestionController@destroy');

Route::get('/survey/{questionaire}-{slug}', 'SurveyController@show');
Route::post('/survey/{questionaire}-{slug}', 'SurveyController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

