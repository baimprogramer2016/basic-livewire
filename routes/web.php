<?php

use App\Http\Controllers\UserController;
use App\Http\Livewire\FullComponent;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/article', function () {
    return view('article');
});
Route::get('/parameter', function () {
    return view('parameter');
});
Route::get('/action', function () {
    return view('action');
});
Route::get('/emit', function () {
    return view('emit');
});
Route::get('/crud', function () {
    return view('users.index');
})->name('user-index');

Route::get('/user/{id}', [UserController::class, 'show'])->name('user-detail');
Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user-edit');

Route::get('full-component/{name}', FullComponent::class)->name('full-component');

Route::get('/life-cycle', function () {
    return view('lifecycle');
})->name('life-cycle');

Route::get('/paginate', function () {
    return view('paginate_main');
})->name('paginate');
