<?php

/*use Illuminate\Support\Facades\Route;


|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});

<?php*/

use Illuminate\Support\Facades\Route;
use App\http\Controllers\usercontroller;
use App\Http\Controllers\statuscontroller;
use App\Http\Controllers\phoneNoscontroller;
use App\http\Controllers\listcountrycontroller;
use App\Http\Controllers\commentmodelscontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


//Welcome page
Route::get('/', function () {
    dd(request());
    return view('welcome');
});
*/

//Get home page
Route::get('/', function(){ return view('welcome'); })->name('Home.page');

//Login form
Route::get('/Login', function() {return view('Login'); })->name('Login.form');



//SignIn form
//Route::get('/SignIn', function() {return view('SignIn'); })->name('SignIn.form');
//Route::get('/SignIn',[usersContoller::class,'userSignin'])->name('SignIn.form');
//Route::post('/add-post',[usersContoller::class,'savePost'])->name('save.post');

Route::get('/users-list',[usersContoller::class,'usersList'])->name('users.list');

//SignIn form
Route::get('/edit-post/{id}',[usersContoller::class,'editusers'])->name('edit.post');
Route::post('/update-post',[usersContoller::class,'updateUsers'])->name('update.post');

//Route::get('/', function () {return view ('welcome');});
Route::get('/delete-post/{id}',[usersContoller::class,'deleteusers'])->name('delete.post');

//Adding Get and post records for user comment
Route::get('/add-commentmodels',[commentmodelscontroller::class,'addcommentmodels'])->name('add.commentmodels');
Route::post('/add-commentmodels',[commentmodelscontroller::class,'savecommentmodels'])->name('save.commentmodels');

//Adding Phone records
Route::get('/add-num', [phoneNoscontroller::class,'addphoneNos'])->name('add.phoneNos');

//Get Country list
Route::get('/Country-list', [listcountrycontroller::class,'index'])->name('country.list');



//Get stutus list
Route::get('/view-status', [statuscontroller::class,'index'])->name('view.status');


//*****************
//User Controls
//*****************
//Get list of users
Route::get('/users-list', [usercontroller::class,'index'])->name('users.list');
//Add user to the database
Route::get('/SignIn', [usercontroller::class,'create'])->name('SignIn.form');
Route::post('/SignIn', [usercontroller::class,'store'])->name('save_user');
//Edit User
Route::get('/edit-user', [usercontroller::class,'edit'])->name('edit.user');
Route::post('/update_user', [usercontroller::class,'update'])->name('update.user');
//Delete user 
Route::post('/delete-user', [usercontroller::class,'destroy'])->name('delete.user');