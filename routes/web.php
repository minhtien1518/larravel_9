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
// thu muc view : resources/views/"welcome".blade.php
Route::get('/', function () {
    $students =[
      [
        'name' => 'chu',
        'age' => '20',
        'class' => 'web111',
        'id' => '1',
        'avatar' => ''

      ],
      [
        'name' => 'chu123',
        'age' => '22',
        'class' => 'web222',
        'id' => '2'
      ],

    ];
    return view('welcome', ['students' => $students]);
});

Route::get('/users/{userId}/{userName?}', function(
    Request $request,
    $userId,
    $userName ='profile'
    ){
    // dd($userId, $userName, $request->all());
});
// thu muc view : resources/views/auth/login.blade.php
// Route::get('/login', function () {
//     // dd('login view');
//     $text = 'Xin chao ca nha';
//     return view('auth.login')->with('text', $text);
// });
