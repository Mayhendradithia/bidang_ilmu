<?php

use App\Http\Controllers\aboutUsController;
use App\Http\Controllers\admin\loginAdminController;
use App\Http\Controllers\admin\registerAdminController as AdminRegisterAdminController;
use App\Http\Controllers\admin\superadminController;
use App\Http\Controllers\AllCourseController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\registerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\courseViewController;
use App\Http\Controllers\gridCourseController;
use App\Http\Controllers\priceDashbordController;
use App\Http\Controllers\registerAdminController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\premium\dashboardMeController;
use App\Http\Controllers\admin\Benefit\benefitController;
use App\Http\Controllers\admin\AboutController;
use App\Http\Controllers\KategoriController;

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

/*Admin Routes*/


Route::get('/formAdmin', [loginAdminController::class, 'formAdmin'])->name('formAdmin');
Route::post('/loginAdmin', [loginAdminController::class, 'admin'])->name('admin');
Route::post('/logoutAdmin', [loginAdminController::class, 'logoutAdmin'])->name('logoutAdmin'); // Form action ke sini

Route::middleware(['auth:admin'])->group(function () {
    Route::get('/dashbord', [App\Http\Controllers\admin\superadminController::class, 'dashbord'])->name('dashbord');
    Route::get('/courseAdmin', [App\Http\Controllers\admin\coursesAdminController::class, 'courseAdmin'])->name('courseAdmin');
    // Route::get('/konfigurasi', [App\Http\Controllers\admin\KonfigurasiController::class, 'landingAdmin'])->name('konfigurasi');
    // Route::get('/create', [App\Http\Controllers\admin\KonfigurasiController::class, 'create'])->name('create');
    // Route::get('/store', [App\Http\Controllers\admin\KonfigurasiController::class, 'store'])->name('store');
    // Route::post('/store', [App\Http\Controllers\admin\KonfigurasiController::class, 'store'])->name('store');
    Route::resource('/dashboard/konfigurasi', App\Http\Controllers\admin\KonfigurasiController::class);
    Route::resource('/dashboard/mitra', App\Http\Controllers\admin\MitraController::class);
    Route::resource('benefit', benefitController::class);
    Route::resource('/about', App\Http\Controllers\admin\AboutController::class);



   
});






/*User Routes*/
Route::get('/', function () {
    return view('index');
});
Route::get('/', [indexController::class, 'index'])->name('index');

Route::get('/aboutUs', [aboutUsController::class, 'about'])->name('about');

// Proteksi index middleware auth
Route::get('/register', [registerController::class, 'showRegisterForm'])->name('showRegisterForm');
Route::post('/register', [registerController::class, 'register'])->name('register');


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('showLoginForm');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/gridCourse', function () {
    return view('gridCourse');
});
Route::get('/gridCourse', [gridCourseController::class, 'gridCourse'])->name('gridCourse');

Route::get('/courseOverview', function () {
    return view('courseOverview');
})->middleware('auth');

Route::middleware(['auth'])->group(function () {
    Route::get('/courseOverview', [courseViewController::class, 'courseOverview'])->name('courseOverview');
    Route::get('/dashboardDosen', [dashboardMeController::class, 'dashboardDosen'])->name('dashboardDosen');
    Route::resource('kategoris', KategoriController::class);
   
});






//Premium

