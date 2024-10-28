<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\messageController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/messages', function () {
    $messages = \App\Models\Message::all();
    return view('messages', ['messages' => $messages]);
});
route::get('/edit_message{$id}',[messageController::class,'edit_message'])->name('editMessage');
route::get('edit_message', function(){
    return view('edit_message');
});