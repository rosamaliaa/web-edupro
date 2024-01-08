<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\TentorController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/userview', 'userview')->name('user.dashboard');
    Route::get('/adminview', 'adminview')->name('admin.dashboard');
    Route::get('/tentorview', 'tentorview')->name('tentor.dashboard');
    Route::post('/logout', 'logout')->name('logout');
});

Route::controller(UserController::class)->group(function() {
    Route::get('/aksesmateri', 'aksesmateri')->name('user.aksesmateri');
    Route::get('/tugasuser', 'tugasuser')->name('user.tugasuser');
    Route::get('/pengerjaanto', 'pengerjaanto')->name('user.pengerjaanto');
    Route::get('/profileuser', 'profileuser')->name('user.profileuser');
    Route::get('/landingpage', 'landingpage')->name('user.landingpage');
    Route::get('/akseskimia', 'akseskimia')->name('user.akseskimia');
    Route::get('/detailmateri', 'detailmateri')->name('user.detailmateri');
    Route::get('/detauiluploadtugas', 'detauiluploadtugas')->name('user.detauiluploadtugas');
    Route::get('/detauiluploadtugas2', 'detauiluploadtugas2')->name('user.detauiluploadtugas2');
    Route::get('/detailpengerjaanto', 'detailpengerjaanto')->name('user.detailpengerjaanto');
    Route::get('/historynilai', 'historynilai')->name('user.historynilai');
});

Route::controller(AdminController::class)->group(function() {
    Route::get('/useradminsiswa', 'useradminsiswa')->name('admin.useradminsiswa');
    Route::get('/kelas', 'kelas')->name('admin.kelas');
    Route::get('/mapel', 'mapel')->name('admin.mapel');
    Route::get('/profiladmin', 'profiladmin')->name('admin.profiladmin');
    Route::get('/useradmintentor', 'useradmintentor')->name('admin.useradmintentor');
    Route::get('/tambahsiswa', 'tambahsiswa')->name('admin.tambahsiswa');
});

Route::controller(TentorController::class)->group(function() {
    Route::get('/materitentor', 'materitentor')->name('tentor.materitentor');
    Route::get('/tugastentor', 'tugastentor')->name('tentor.tugastentor');
    Route::get('/ujiantentor', 'ujiantentor')->name('tentor.ujiantentor');
    Route::get('/tentoruser', 'tentoruser')->name('tentor.tentoruser');

    Route::get('/tambahmateritentor', 'tambahmateritentor')->name('tentor.tambahmateritentor');
    Route::get('/detailtugastentor1', 'detailtugastentor1')->name('tentor.detailtugastentor1');
    Route::get('/detailtugastentor2', 'detailtugastentor2')->name('tentor.detailtugastentor2');
    Route::get('/tentorqb7', 'tentorqb7')->name('tentor.tentorqb7');
    Route::get('/tambahpilgan', 'tambahpilgan')->name('tentor.tambahpilgan');
    Route::get('/tambahessay', 'tambahessay')->name('tentor.tambahessay');

});
