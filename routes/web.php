<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\AboutPageController;
use App\Http\Controllers\ResultPageController;
use App\Http\Controllers\TeamPageController;
use App\Http\Controllers\GalleryPageController;
use App\Http\Controllers\ApplyPageController;
use App\Http\Controllers\ContactPageController;
use App\Http\Controllers\AdminPageController;

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



Route::get('/',[HomePageController::class,'index']);
Route::get('/about',[AboutPageController::class,'index']);
Route::get('/result',[ResultPageController::class,'index']);
Route::get('/team',[TeamPageController::class,'index']);
Route::get('/gallery',[GalleryPageController::class,'index']);
Route::get('/contact',[ContactPageController::class,'index']);
Route::get('/apply-now',[ApplyPageController::class,'index']);

// admin

Route::get('/admin',[AdminPageController::class,'index']);
Route::get('/admin/dashboard',[AdminPageController::class,'dashboard']);
Route::get('/admin/addAdmin',[AdminPageController::class,'addAdminUser']);
Route::get('/admin/adminUsers',[AdminPageController::class,'AdminUser']);

Route::post('/admin/addUserProcesses',[AdminPageController::class,'addAdminUserProcess']);

Route::post('/admin-process',[AdminPageController::class,'adminloginUser']);

Route::get('/adminlogout',[AdminPageController::class,'Logout']);

Route::get('/admin/notice',[AdminPageController::class,'notice']);

Route::get('/admin/result',[AdminPageController::class,'result']);

Route::get('/admin/reg-reply',[AdminPageController::class,'regreply']);

Route::get('/admin/gallery',[AdminPageController::class,'AdminGallery']);

Route::post('/admin-notice-process',[AdminPageController::class,'adminnoticeprocess']);


Route::post('/admin/addResultProcesses',[AdminPageController::class,'addResultProcess']);


Route::post('/admin/showResult',[AdminPageController::class,'showResultInMain']);

Route::post('/regReply-process',[AdminPageController::class,'regReplyProcess']);

Route::post('/admin/addGalleryPic',[AdminPageController::class,'addGalleryPic']);


Route::get('/admin/user/delete/{id}',[AdminPageController::class,'deleteinadmin'])->name('deleteinadmin');

Route::get('/admin/notice/delete/{id}',[AdminPageController::class,'deletenotice'])->name('deletenotice');

Route::get('/admin/result/delete/{id}',[AdminPageController::class,'deleteresult'])->name('deleteresult');

Route::get('/admin/reg/delete/{id}',[AdminPageController::class,'deletereg'])->name('deletereg');

Route::get('/admin/gallery/delete/{id}',[AdminPageController::class,'deletegallery'])->name('deletegallery');