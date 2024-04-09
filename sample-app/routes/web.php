<?php

use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// locaklhost/messagesを開くとMessageControllerのindexメソッドが対応
Route::get('messages' , [MessageController::class,'index']);
// locaklhost/messagesからのPOSTをMessageControllerのstoreメソッドが対応
Route::post('messages',[MessageController::class,'store']);

