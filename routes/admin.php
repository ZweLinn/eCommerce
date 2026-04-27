<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin' , 'middleware' => ['auth' , 'admin']], function () {
    Route::get('/home' , [AdminController::class, 'adminHome'])->name('adminHome');
});