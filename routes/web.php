<?php
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth_googleController;



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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/google', function () {
    return Socialite::driver('google')->redirect();
});

//  Route::get('call_back_1', ['as'   => 'call_back_1','uses' =>'auth_googleController@callback']);
 Route::get('/call_back_1', [auth_googleController::class, 'callback']);
 Route::get('/login', [auth_googleController::class, 'index']);


// Route::get('/call_back_1', ['uses' => auth_googleController@callback]);
