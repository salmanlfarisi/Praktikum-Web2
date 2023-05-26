<?php


use App\Http\Controllers\SkillController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/salam', function () {
    return "selamat datang";
});

Route::get('/kabar', function () {
    return view('kondisi');
});

// buat route nilai

Route::get('/nilai', function () {
    return view('nilai');
});

Route::get('/pasien', function () {
    return view('pasien');
});

// buat route skill
Route::get('/skill', [SkillController::class, 'index']);

// buat route hasil form skill
Route::post('/skillhasil', [SkillController::class, 'skill']);