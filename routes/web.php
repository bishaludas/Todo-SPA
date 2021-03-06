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

Route::resource('/todo', 'TodoController');
Route::get('/todo/{todo}/delete', 'TodoController@delete')->name('todo.delete');


Route::resource('survey', 'SurveyController');
Route::resource('survey.questions', 'SurveyQuestionsController');
Route::resource('questions.options', 'QuestionOptionsController');

