<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\ResumeController;

/*
Route::get('/',function(){
    $url = route('about');
    return '<a href="/about">About Us</a>';
});
Route::get('/about',function(){
    return 'About Page';
})-> name('about');
Route::get('/contact',function(){
    return 'Contact Page';
});


include 'admin.php'; //لتضمين صفحة admin.php في هذه الصفحة


Route::get('/user/{name}/{age}',function($name , $age){
    return 'Welcome ' . $name . ' Age is '. $age;
})->whereAlpha('name')->WhereNumber('age');
//})->where('name','[a-dA-D]+');


Route::get('sessions/{course}/{type?}',function($course , $type = 'Live-online'){
    return ' course ' . $course . ' type ' . $type;
});


Route::match(['put','patch','get'],'/edit',function(){
    return 'Edit Page';
});

//Route::redirect('/','/about');

Route::view('/welcome', 'welcome');



Route::get('calc/{n1}/{n2}/{op}',[TestController::class,'calc']);

*/



//index , about , contact , searvices 

Route::get('/',[MainController::class,'index'])->name('index');
Route::get('/about',[MainController::class,'about'])->name('about');
Route::get('/contact',[MainController::class,'contact'])->name('contact');
Route::get('/searvices',[MainController::class,'searvices'])->name('searvices');
Route::get('/post/{id?}',[MainController::class,'post'])->name('post');
Route::get('export', ExportController::class);
Route::get('/user/{name}/{age}',[UserController::class,'user'])->name('user'); 

////////////////////////////////////////////////////////////////////////////////////////////

Route::prefix('personal')->name('personal.')->group(function(){

Route::get('/',[ResumeController::class,'index'])->name('index');
Route::get('/contact',[ResumeController::class,'contact'])->name('contact');
Route::get('/projects',[ResumeController::class,'projects'])->name('projects');
Route::get('/resume',[ResumeController::class,'resume'])->name('resume');





});