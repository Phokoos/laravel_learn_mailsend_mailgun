<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sendEmail', function (){
    $data = [
        'title'=>'Hi my dear',
        'content'=>'My first email',
    ];

    Mail::send('emails.test', $data, function ($message){
        $message->to('capitantannks@gmail.com', 'Mykola')->subject('Hello from test!');
    });
});
