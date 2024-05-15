<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AboutConttroller;

//Route::get('/', function () {
   // return view('home');
//});


// route::get('/about',function (){
// return 'welcome to my website';
// });

//route::get('/contact/{name?}',function ($name="mansoor"){
 //   return "welcome $name to my website"; 
//});

//route::get('/custum',[AboutConttroller::class,'about']);

//route::get ('/Greet',function(){
    //return view('Greet',
    //[
       // 'name'=>'Mansoor'
    //]
//);
//});
//Route::get('/about',function()
//{
  //  return view ('About');
//}
//);

Route :: get('/My_CV',function (){
    return view ('index');
    });