<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/',[HomeController::class,'index']);

Route::get('/add_doctor_view',[AdminController::class,'addview']);

Route::post('/upload_doctor',[AdminController::class,'upload']);


//viwe admin Docotor List

Route::get('/view_doctor_list',[AdminController::class,'doctorlist']);

//doctor Edit

Route::get('/doctor_edit/{id}',[AdminController::class,'edit']);

//update docotr

Route::put('/update_doctor/{id}',[AdminController::class,'update']);

//doctor Delete

Route::get('/doctor_delete/{id}',[AdminController::class,'delete']);


//appoinment

Route::post('/appointment',[HomeController::class,'appointment']);

//user Appointment

Route::get('/myappointment',[HomeController::class,'myappointment']);


//cancel appoint

Route::get('/cancel_appoint/{id}',[HomeController::class,'cancel_appoint']);


//showAppointment

Route::get('/showaAppoints',[AdminController::class,'showaAppoints']);

//admin approved

Route::get('/approved/{id}',[AdminController::class,'approved']);

//cancel approved

Route::get('/cancel/{id}',[AdminController::class,'cancel']);

//send Mail

Route::get('/emailview/{id}',[AdminController::class,'emailview']);



//send Email

Route::post('/sendemail/{id}',[AdminController::class,'sendemail']);



//News Section

Route::get('/news',[AdminController::class,'news']);


//post data in database

Route::post('/news_post',[AdminController::class,'news_post']);

//post List


Route::get('/post_list',[AdminController::class,'post_list']);


//post edit

Route::get('/postedit/{id}',[AdminController::class,'postedit']);


//Update Post

Route::put('/updatepost/{id}',[AdminController::class,'updatepost']);









Route::get('/home',[HomeController::class,'redirect'])->middleware('auth','verified');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
