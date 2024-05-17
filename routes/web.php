<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $data=[
        'user'=>[
            'name'=> 'Booleanc',
            'email'=> 'yq7p4@example.com',
        ]
    ];

    
    return view('home',$data,
    [
        'name' => 'Booleanc',
        'message' => 'Ciao, sono Booleanc!',
    ]);

});
Route::get('/contatti', function () {
    return view('contact');
});