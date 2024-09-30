<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OfferController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\UserProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'log'], function () {

    Auth::routes(['register' => false]);

    Route::get('/connexion', [AuthController::class, 'showLoginForm'])->name('manager.login');
    Route::post('/login', [AuthController::class, 'login'])->name('manager.login.submit');
    Route::post('logout', [AuthController::class, 'logout'])->name('manager.logout');

    Route::group(['middleware' => ['auth']], function () {
        Route::get('dashboard', DashboardController::class)->name('manager.dashboard');

        // Permissions
        Route::resource('permissions', PermissionController::class, ['except' => ['store', 'update', 'destroy']]);

        // Roles
        Route::resource('roles', RoleController::class, ['except' => ['store', 'update', 'destroy']]);

        // Users
        Route::resource('users', UserController::class, ['except' => ['store', 'update', 'destroy']]);

        // Offers
        Route::resource('offers', OfferController::class, ['except' => ['store', 'update', 'destroy']]);
    });

    Route::group(['prefix' => 'profile', 'as' => 'profile.', 'middleware' => ['auth']], function () {
        if (file_exists(app_path('Http/Controllers/Auth/UserProfileController.php'))) {
            Route::get('/', [UserProfileController::class, 'show'])->name('show');
        }
    });
});


