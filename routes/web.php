<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\ShowController;

Route::get('/', function () {
    return view('Home');
});
Route::get('upload', [UploadController::class, 'createForm']);
Route::post('upload', [UploadController::class, 'BookUpload'])->name('bookUpload');

//Route::get('show-file/{id}', [ShowFiles::class, 'showFiles'])->name('showFiles');
Route::get('show', [ShowController::class, 'showBooks'])->name('showBooks');

