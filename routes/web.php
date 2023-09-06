<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
  
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
  
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [AuthController::class, 'dashboard']); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('mendel_genetics', [AuthController::class, 'mendel_genetics'])->name('mendel_genetics');
Route::get('nonmendel_genetics', [AuthController::class, 'nonmendel_genetics'])->name('nonmendel_genetics');

Route::get('lpm', [AuthController::class, 'lpm1'])->name('lpm');
Route::get('navbar', [AuthController::class, 'navbar1'])->name('navbar');
Route::get('home', [AuthController::class, 'home'])->name('home');

Route::get('index_genetics', [AuthController::class, 'index_genetics'])->name('index_genetics');
Route::get('index_genetics_video', [AuthController::class, 'index_genetics_video'])->name('index_genetics_video');


Route::get('lawdominance', [AuthController::class, 'lawdominance'])->name('lawdominance');
Route::get('lawsegregation', [AuthController::class, 'lawsegregation'])->name('lawsegregation');
Route::get('lawassortment', [AuthController::class, 'lawassortment'])->name('lawassortment');

Route::get('incompletedominance', [AuthController::class, 'incompletedominance'])->name('incompletedominance');
Route::get('codominance', [AuthController::class, 'codominance'])->name('codominance');
Route::get('multipleallele1', [AuthController::class, 'multipleallele1'])->name('multipleallele1');
Route::get('multipleallele2', [AuthController::class, 'multipleallele2'])->name('multipleallele2');
Route::get('multipleallele3', [AuthController::class, 'multipleallele3'])->name('multipleallele3');
Route::get('pleitropic', [AuthController::class, 'pleitropic'])->name('pleitropic');






