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

/*
Оригинальный маршрут
Route::get('/', function () {
    return view('welcome');
});
 */


Route::get('/', 'MessageController@index')->name('messages');
/*
 * Пока не удалось сделать рабочий "ресурсный маршрутизатор" стартовой странички.
 * 
 * Route::resource('/', 'MessageController', ['names' => 'message']);
 * Так даже удаётся сгенерировать ссылку в шаблоне.
 * route('message.show', 2) выдаёт http://larguestbook.local/2 ,
 * но ссылка уже не открывается.
 * 
 * Route::resource('/', 'MessageController')->name('message');
 * Ресурсного метод name($method, $name). С одним параметро он не используется.
 */


// "Ресурсный маршрутизатор" для MessageController
Route::resource('messages', 'MessageController')
        ->except(['create']); // Create нам не нужен
