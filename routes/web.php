<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\ExploreController;

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


Route::get('/index', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

// Route::get('/register', function () {
//     return view('register');
// });

Route::get('/getDataExplore', [ExploreController::class, 'getData']);



// Route::get('/posting', function () {
//     return view('posting');
// });

Route::get('/buat_album', function () {
    return view('buat_album');
});

Route::get('/detail_komen/{id}', function () {
    return view('detail_komen');
});

Route::get('/detail_komen/{id}/getdatadetail', [ExploreController::class, 'getdatadetail']);
Route::get('/detail_komen/getComment/{id}', [ExploreController::class, 'ambildatakomentar']);
Route::post('/detail_komen/kirimkomentar', [ExploreController::class, 'kirimkomentar']);


Route::get('/profile', [UserController::class, 'profile']);
Route::get('/album', [UserController::class, 'album']);
Route::get('/album/{id}', [UserController::class, 'show'])->name('album.show');


//edit profile
Route::get('/edit_profile', [UserController::class, 'edit_profile']);
Route::post('/updateprofile', [UserController::class, 'updateprofile']);


Route::get('/edit_pw', function () {
    return view('edit_pw');
});
Route::post('/ubah_password', [UserController::class, 'ubah_password']);


Route::get('/register', [UserController::class, 'register']);
Route::post('/cek_register', [UserController::class, 'cek_register']);
Route::post('/proses_login', [UserController::class, 'proses_login']);

Route::post('/tambah_album', [UploadController::class, 'tambah_album']);

Route::middleware(['auth'])->group(function () {
    Route::post('/up_foto', [UploadController::class, 'up_foto']);
    Route::get('/posting', [UploadController::class, 'posting']);
    Route::get('/explore', function () {
        return view('explore');
    });

    //profil-user
    Route::get('/profil_user/{id}', [UserController::class, 'profil_other']);
    Route::get('/profil_user/getDataProfil/{id}', [UserController::class, 'getData']);
    Route::get('/getfotouser', [UserController::class, 'getdataa']);



    // Route::post('/likefoto', [ExploreController::class, 'likes']);
    Route::POST('/like', [ExploreController::class, 'likes']);




    Route::get('/logout', [UserController::class, 'logout']);
});
