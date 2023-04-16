<?php

use Illuminate\Support\Facades\Route;

use App\Models\student;

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

// static function called 'get' in class called 'Route' 
// get -> two parameter 1(name of route) , 2(anonimus function without name)


Route::get('/', function () {
    return view('welcome');
});

Route::get('/students' , function (){

     $arr = [
        'student' => student::all()
     ];

    return view('student_list' , $arr);  //pass anything inside ass_array to view as variable
});


Route::get('/students/{id}', function ($id) {
   $item = student::find($id);
   return view('student_info',$item);

});
