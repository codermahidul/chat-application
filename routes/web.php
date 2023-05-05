<?php

use Illuminate\Support\Facades\Route;
use App\Events\Message;
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('welcome');
});


Route::post('send-message', function(Request $request){
    event(new Message($request->username, $request->message));
    return ['success' => true];
});