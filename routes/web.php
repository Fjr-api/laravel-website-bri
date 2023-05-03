<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MuridController;
use App\Http\Controllers\RegisterController;
use App\Models\Murid;
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
//     return redirect("/utama");
// });
Route::get('/', function () {
    return redirect("/login");
});

Route::get('/utama', function () {
    return view("/utama");
});

Route::get('/home', function () {
    return view("/home");
});

//----------------route peminjaman------------------

Route::get('/pjm', function () {
    return view("/layout/peminjaman/pjm");
});

Route::get('/kur', function () {
    return view("/layout/peminjaman/kur");
});

Route::get('/kupedes', function () {
    return view("/layout/peminjaman/kupedes");
});

Route::get('/kupra', function () {
    return view("/layout/peminjaman/kupra");
});

Route::get('/kemitraan', function () {
    return view("/layout/peminjaman/kemitraan");
});

// ------------------================---------------


//----------------route penyimpanan------------------

Route::get('/pym', function () {
    return view("/layout/penyimpanan/pym");
});

Route::get('/britama', function () {
    return view("/layout/penyimpanan/britama");
});

Route::get('/britamab', function () {
    return view("/layout/penyimpanan/britamab");
});

Route::get('/deposito', function () {
    return view("/layout/penyimpanan/deposito");
});

Route::get('/simpedes', function () {
    return view("/layout/penyimpanan/simpedes");
});

// ------------------================---------------


Route::get("/dashboard", [MuridController::class, "show"])->middleware("IsLogin");
Route::get("/login", [LoginController::class, "index"])->middleware(["guest"]);
Route::post("/login", [LoginController::class, "DoLogin"]);
Route::get("/register", [RegisterController::class, "index"])->middleware(["guest"]);
Route::post("/register", [RegisterController::class, "DoRegister"]);
Route::post("/logout", [LoginController::class, "DoLogout"]);
Route::get("/tambah", [MuridController::class, "create"])->middleware("IsLogin");
Route::post("/tambah", [MuridController::class, "store"]);
Route::get("hapus/{murid:id}", [MuridController::class, "destroy"])->middleware("IsLogin");
Route::get("/ubah/{murid:id}", [MuridController::class, "edit"])->middleware("IsLogin");
Route::post("/ubah", [MuridController::class, "update"]);