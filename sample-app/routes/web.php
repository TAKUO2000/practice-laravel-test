<?php

use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// locaklhost/messagesを開くとMessageControllerのindexメソッドが対応
Route::get('messages' , [MessageController::class,'index']);
// locaklhost/messagesからのPOSTをMessageControllerのstoreメソッドが対応
Route::post('messages',[MessageController::class,'store']);


// Route::get('admin/books',[BookController::class,'index'])
//     ->name('book.index');
// Route::get('admin/books/{id}',[BookController::class,'show'])
//     ->whereNumber('id')
//     ->name('book.show');

Route::prefix('admin/books')
    ->name('book.')
    ->controller(BookController::class)
    ->group(function(){
    Route::get('','index')->name('index');
    Route::get('{book}','show')->whereNumber('book')->name('show');
    Route::get('create','create')->name('create');
    Route::post('','store')->name('store');
    Route::get('{book}/edit','edit')->whereNumber('book')->name('edit');
    Route::put('{book}','update')->whereNumber('book')->name('update');
    });

