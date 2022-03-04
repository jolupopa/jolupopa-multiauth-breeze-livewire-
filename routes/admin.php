<?php

use App\Http\Controllers\Admin\Auth\AuthenticatedSessionAdminController;
use App\Http\Controllers\Admin\Auth\RegisteredAdminController;
use Illuminate\Support\Facades\Route;

Route::get('/admin/register', [RegisteredAdminController::class, 'create'])
                ->middleware('guest')
                ->name('admin.register');

Route::post('/admin/register', [RegisteredAdminController::class, 'store'])
                ->middleware('guest');

Route::get('/admin/login', [AuthenticatedSessionAdminController::class, 'create'])
                ->middleware('guest')
                ->name('admin.login');

Route::post('/admin/login', [AuthenticatedSessionAdminController::class, 'store'])
                ->middleware('guest');

Route::post('/admin/login', [AuthenticatedSessionAdminController::class, 'store'])
                ->middleware('guest');


Route::post('/admin/logout', [AuthenticatedSessionAdminController::class, 'destroy'])
                ->middleware(['auth:admin'])
                ->name('admin.logout');


Route::get('/admin/dashboard', function () {
	return view('admin-dashboard');
})->middleware(['auth:admin'])->name('admin.dashboard');

Route::get('/admin/perfil/show', function () {
  return view('profile.show');
})->middleware(['auth:admin'])->name('admin.profile');

Route::get('backend', function(){
  return view('backend.dashboard');
} );



