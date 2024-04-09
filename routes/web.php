<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\pdf;
use App\Http\Controllers\ProfileController;
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
Route::get('/', [Controller::class, 'welcome'])->name("welcome");
Route::get('/home', [Controller::class, 'welcome'])->name('home');
Route::get('/contact', [Controller::class, 'contact'])->name('contact');
Route::get('/services', [Controller::class, 'services'])->name('services');
Route::get('/service/{id}', [Controller::class, 'services_details'])->name('services_details');
Route::get('/teams', [Controller::class, 'teams'])->name('teams');
Route::get('/about', [Controller::class, 'about'])->name('about');
Route::get('/logout', [Controller::class, 'logout'])->name('logout');




Route::get('/login', function () {
    return view('auth.login');
})->name("login");


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
    Route::get('/admin/services', [Controller::class, 'show_service_page']);
    Route::get('/admin/projets', [Controller::class, 'show_projet_page']);
    Route::get('/admin/categories', [Controller::class, 'show_categorie_page']);
    Route::get('/admin/blog', [Controller::class, 'show_blog_page']);
    Route::get('/admin/contacts', [Controller::class, 'show_admin_page']);

    Route::get('/admin/devis/{id}/print', [pdf::class, 'generate_devis']);
});


