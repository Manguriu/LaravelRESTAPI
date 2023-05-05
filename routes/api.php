<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\StudentcController;
use App\Http\Controllers\Api\SubjectController;
use App\Http\Controllers\Api\SectionController;
use App\Http\Controllers\Api\StudentController;



// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// student class route
Route::get('/class',[StudentcController::class,'Index']);

Route::POST('/class/store',[StudentcController::class,'Store']);

Route::get('/class/edit/{id}',[StudentcController::class,'Edit']);

Route::POST('/class/update/{id}',[StudentcController::class,'Update']);

Route::get('/class/delete/{id}',[StudentcController::class,'Delete']);

// subject
Route::get('/subject',[SubjectController::class,'Index']);

Route::POST('/subject/store',[SubjectController::class,'Store']);

Route::get('/subject/edit/{id}',[SubjectController::class,'Edit']);

Route::POST('/subject/update/{id}',[SubjectController::class,'Update']);

Route::get('/subject/delete/{id}',[SubjectController::class,'Delete']);

//section
Route::get('/section',[SectionController::class,'Index']);

Route::POST('/section/store',[SectionController::class,'Store']);

Route::get('/section/edit/{id}',[SectionController::class,'Edit']);

Route::POST('/section/update/{id}',[SectionController::class,'Update']);

Route::get('/section/delete/{id}',[SectionController::class,'Delete']);

//student
Route::get('/student',[StudentController::class,'Index']);

Route::POST('/student/store',[StudentController::class,'Store']);

Route::get('/student/edit/{id}',[StudentController::class,'Edit']);

Route::POST('/student/update/{id}',[StudentController::class,'Update']);

Route::get('/student/delete/{id}',[StudentController::class,'Delete']);