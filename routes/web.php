<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::prefix("student")->group(function(){
    Route::name("student.")->group(function(){

        Route::get("register", [StudentController::class, 'register'])->name('register');
        Route::post("doregister", [StudentController::class, 'doregister'])->name('doregister');
        Route::get("list", [StudentController::class, 'list'])->name('list');
        Route::get("edit", [StudentController::class, 'edit'])->name('edit');
        Route::post("update", [StudentController::class, 'update'])->name('update');
        Route::post("delete", [StudentController::class, 'delete'])->name('delete');
        Route::get("confirmDelete", [StudentController::class, 'confirmDelete'])->name('confirmDelete');
    });
});


