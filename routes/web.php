<?php
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
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Middleware\Authenticate;

Auth::routes(['verify'=>true]);//['verify'=>true] mean the user must go to the email to click the sent email link to verify,if not verify not allowed the user to login to the website.
Route::get('/', function () {
    return view('welcome');
    // return 'home';
});
Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');//a user must be verified,so the HomeController used a 'middleware' called 'auth' and must be verified.
