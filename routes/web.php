<?php

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
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/resume', function () {
    return view('resume');
});

Route::get('/project', function () {
    return view('project');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact', function (\Illuminate\Http\Request $request) {
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'subject' => 'required',
        'message' => 'required',
    ]);

    \App\Models\Message::create($request->all());

    return back()->with('success', true);
});

// Admin Routes
Route::get('/admin/login', [\App\Http\Controllers\AdminController::class, 'showLogin']);
Route::post('/admin/login', [\App\Http\Controllers\AdminController::class, 'login']);
Route::get('/admin/logout', [\App\Http\Controllers\AdminController::class, 'logout']);

Route::get('/admin/dashboard', [\App\Http\Controllers\AdminController::class, 'dashboard']);
Route::get('/admin/edit/{id}', [\App\Http\Controllers\AdminController::class, 'edit']);
Route::post('/admin/edit/{id}', [\App\Http\Controllers\AdminController::class, 'update']);
Route::get('/admin/delete/{id}', [\App\Http\Controllers\AdminController::class, 'destroy']);
