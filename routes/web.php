<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\VeiculoController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::redirect('/', "/welcome");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('');

Route::resources([
    "welcome" => WelcomeController::class
]);

Route::resources([
    "veiculo" => VeiculoController::class
]);

Route::get('logout', 'LoginController@logout')->name('logout');

