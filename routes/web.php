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

\Route::get('/', 'IndexController@index');
\Route::post('/', 'IndexController@postContact');
\Route::get('threed', 'IndexController@threed');
\Route::get('lung', 'IndexController@lung');
\Route::get('concentration', 'IndexController@concentration');
\Route::get('knowledge', 'IndexController@knowledge');
\Route::get('knowledge/{id}', 'IndexController@knowledgeDetail');