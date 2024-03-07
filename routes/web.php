<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminloginController;



Route::get('/', function () {
    return  view('welcome');
});

Route::get('/admin/login', [AdminloginController::class,'index'])->name('admin.login');

