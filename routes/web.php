<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\RoleController;
use App\Livewire\Chat\CreateChat;
use App\Livewire\Chat\Main;

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

Route::middleware(['splade'])->group(function () {
    Route::get('/', fn () => view('home'))->name('home');
    Route::get('/docs', fn () => view('docs'))->name('docs');

    // Registers routes to support the interactive components...
    Route::spladeWithVueBridge();

    // Registers routes to support password confirmation in Form and Link components...
    Route::spladePasswordConfirmation();

    // Registers routes to support Table Bulk Actions and Exports...
    Route::spladeTable();

    // Registers routes to support async File Uploads with Filepond...
    Route::spladeUploads();
});
Route::get('/', function () {
    return view('welcome');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/manual', function () {
        return view('manual');
    })->name('manual');

});

//Customers
Route::resource('customers', 'App\Http\Controllers\CustomerController');
Route::get('customer/pdf', [App\Http\Controllers\CustomerController::class, 'pdf'] )->name('customers.pdf');


//Category
Route::resource('categorys', 'App\Http\Controllers\CategoryController');

//Product
Route::resource('products', 'App\Http\Controllers\ProductController');

//Vendor
Route::resource('vendors', 'App\Http\Controllers\VendorController');

//Servicios
Route::resource('servicios', 'App\Http\Controllers\ServicioController');
Route::get('servicio/pdf', [App\Http\Controllers\ServicioController::class, 'pdf'] )->name('servicios.pdf');
Route::get('servicio/excel', [App\Http\Controllers\ServicioController::class, 'excel'] )->name('servicios.excel');
Route::get('servicio/{{id}}/download', [App\Http\Controllers\ServicioController::class, 'download'])->name('servicios.download');

//users
Route::resource('users', UserController::class)->only(['index', 'edit', 'update', 'destroy']);
// Route::resource('users/manual', 'App\Http\Controllers\Admin\UserController');
Route::get('users/manual', function () { return view('users/manual'); }); //manual de usuarios
// Route::resource('users', [App\Http\Controllers\Admin\UserController::class])->names('admin.users');

//roles
// Route::resource('roles', RoleController::class)->names('roles');
Route::resource('roles', 'App\Http\Controllers\RoleController');


//Livewire routes
Route::get('/userrs',CreateChat::class)->name('userrs');
// Route::get('/userrs', [App\Livewire\Chat\CreateChat::class]);
// Route::get('/userrs', CreateChat::class)->name('userrs');
Route::get('/chat{key?}',Main::class)->name('chat');

