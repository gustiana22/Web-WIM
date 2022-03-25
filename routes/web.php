<?php

use App\Models\Wim;
use Yajra\DataTables\DataTables;

use Illuminate\Support\Facades\Route;
use Yajra\DataTables\Utilities\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;

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
    return view('auth.login');
});

Auth::routes();

// Route::get('/home', [HomeController::class, 'index'])->name('home');

// Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('home');

Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/dashboard', [DashboardController::class, 'dashadmin'])->name('dashboard');
});

Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/losarang', [DashboardController::class, 'losarang'])->name('losarang');
});

Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/losaranglidar', [DashboardController::class, 'losaranglidar'])->name('losaranglidar');
});

Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/kulwaru', [DashboardController::class, 'kulwaru'])->name('kulwaru');
});

Route::group(['middleware' => ['role:user']], function () {
    Route::get('/dashboarduser', [DashboardController::class, 'dashuser'])->name('dashboarduser');
});

// Route::get('/data', function() {
//     return DataTables::of(Wim::query())->make(true);
// })->name('data');


Route::get('/data', [DashboardController::class, 'data'])->name('data');

Route::get('/datakulwaru', [DashboardController::class, 'datakulwaru'])->name('datakulwaru');

Route::get('/datalidar', [DashboardController::class, 'datalidar'])->name('datalidar');



// Route::middleware('role:admin')->get('/dashboard', function() {
//     return view('admin.index');
// })->name('dashboard');


// Route::middleware('role:user')->get('/dashboarduser', function() {
//     return view('user_front.index');
// })->name('dashboarduser');

// Route::middleware('role:device')->get('/dashboarddevice', function() {
//     return view('device.index');
// })->name('dashboarddevice');



// Route::group(['middleware' => ['role:admin']], function (){
//     Route::get('/dashboard', [
//     'as' => 'dashboard',
//     'uses' => [DashboardController::class, 'dashboard']]);
// });



Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
});

