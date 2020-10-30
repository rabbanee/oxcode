<?php

use App\Http\Controllers\API\AttractionController;
use App\Http\Controllers\API\CategoryController;
use App\Http\Controllers\API\CityController;
use App\Http\Controllers\API\ImageController;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\ResetPasswordController;
use App\Http\Controllers\API\SocialAccountController;
use App\Http\Controllers\API\TravelerReviewController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\VerificationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['return-json'])->group(function () {
    Route::group(['prefix' => 'auth'], function () {
        Route::post('login', [AuthController::class, 'login'])->middleware('verified');
        Route::post('register', [AuthController::class, 'register']);

        Route::get('register/verify/{id}',  [VerificationController::class, 'verify'])->name('verification.verify');
        Route::get('register/resend', [VerificationController::class, 'resend'])->name('verification.resend');

        Route::group(['middleware' => 'auth:api', 'verified'], function () {
            Route::get('logout', [AuthController::class, 'logout']);
            Route::get('user', [AuthController::class, 'user']);
        });

        Route::get('{provider}/redirect', [SocialAccountController::class, 'redirectToProvider']);
        Route::get('{provider}/callback', [SocialAccountController::class, 'handleProviderCallback']);
    });

    Route::group(['namespace' => 'Auth', 'middleware' => 'api', 'prefix' => 'password'], function () {
        Route::post('create', [ResetPasswordController::class, 'create']);
        Route::get('find/{token}', [ResetPasswordController::class, 'find']);
        Route::post('reset', [ResetPasswordController::class, 'reset']);
    });

    Route::post('search/attractions', [AttractionController::class, 'search']);
    Route::apiResource('attractions', AttractionController::class);

    Route::prefix('popular')->group(function () {
        Route::get('attractions', [AttractionController::class, 'popular'])->name('popular.attractions');
        Route::get('cities', [CityController::class, 'popular'])->name('popular.cities');
        Route::get('categories', [CategoryController::class, 'popular'])->name('popular.categories');
    });

    Route::get('categories', [CategoryController::class, 'index']);

    Route::get('images/{id}', [ImageController::class, 'show'])->name('image.show');

    Route::middleware(['auth:api', 'verified'])->group(function () {
        Route::put('users/update', [UserController::class, 'update']);
        Route::apiResource('reviews', TravelerReviewController::class);
    });
});
