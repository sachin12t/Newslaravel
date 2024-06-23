<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\HomeController;
use App\Http\controllers\AdminController;
use App\Http\controllers\CategeoryControlle;
use App\Http\controllers\BlogController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/',[HomeController::class,'index'])->name('index');
Route::get('/letestnews',[HomeController::class,'letestnews'])->name('letestnews');
Route::get('/newscategoery',[HomeController::class,'newscategoery'])->name('newscategoery');
Route::get('/blogs',[HomeController::class,'blog'])->name('blog');
Route::get('/about',[HomeController::class,'abouts'])->name('about');
Route::get('/blogview{id}',[HomeController::class,'blogview'])->name('blogview');


//admin routes
Route::get('admin/deshboard',[AdminController::class,'deshboard'])->name('deshboard');

#################################################################################################

Route::get('admin/insertlatest',[AdminController::class,'insertlatest'])->name('insertlatest');
Route::post('admin/insertletastnews',[AdminController::class,'insertletastnews'])->name('insertletastnews');
Route::get('admin/showletastenews',[AdminController::class,'lnewstable'])->name('lnewstable');
Route::get('admin/ldelete{id}',[AdminController::class,'ldelete'])->name('ldelete');

######################################################################################################
//admin categoery routes
Route::get('admin/addcategeory',[CategeoryControlle::class,'categeory'])->name('addcategeory');
Route::get('admin/showcategeory',[CategeoryControlle::class,'showcategeory'])->name('showcategeory');
Route::post('admin/insertcategeory',[CategeoryControlle::class,'insertcategeory'])->name('insertcategeory');
Route::get('admin/cdelete{id}',[CategeoryControlle::class,'cdelete'])->name('cdelete');
############################################################################################################

#//admin blog routes
Route::get('admin/insertblog',[BlogController::class,'insertblog'])->name('insertblog');
Route::post('admin/insertblogs',[BlogController::class,'insertblogs'])->name('insertblogs');
Route::get('admin/showblog',[BlogController::class,'showblog'])->name('showblog');
Route::get('admin/delete{id}',[BlogController::class,'delete'])->name('delete');














