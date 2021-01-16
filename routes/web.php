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

// User Routes
Route::get('/', 'UsersController@index');



// Menu Routes
Route::get('/menus', 'MenusController@index');




// Project Routes
Route::get('/projects', 'ProjectsController@index');
Route::get('/projects/add', 'ProjectsController@add');
Route::get('/projects/edit/{id?}', 'ProjectsController@edit');




// Task Routes
Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/add', 'TasksController@add');
Route::get('/tasks/edit/{id?}', 'TasksController@edit');
Route::post('/tasks/create', 'TasksController@create');
Route::post('/tasks/update', 'TasksController@update');
// Route::get('/tasks/store', function()
// {
//     return 'Hello World';
// });





// Matching Task Routes
Route::get('/matching_task', 'MatchingTaskController@index');
Route::get('/matching_task/add', 'MatchingTaskController@add');
Route::get('/matching_task/edit/{id?}', 'MatchingTaskController@edit');
Route::get('/matching_task/detail/{id?}', 'MatchingTaskController@detail');
Route::post('/matching_task/create', 'MatchingTaskController@create');
Route::post('/matching_task/getQaByCriteria', 'MatchingTaskController@getQaByCriteria');



// Skills Routes
Route::get('/skills', 'SkillController@index');
Route::get('/skills/add', 'SkillController@add');
Route::get('/skills/edit/{id?}', 'SkillController@edit');
Route::post('/skills/create', 'SkillController@create');
Route::post('/skills/update', 'SkillController@update');
Route::get('/skills/destroy/{id?}', 'SkillController@destroy');
// Dashboard  Routes
Route::get('/dashboard', 'DashboadController@index');

// TaskList  Routes
Route::get('/tasklist', 'TasklistController@index');

// Login  Routes
Route::get('/login', 'LoginController@index');
