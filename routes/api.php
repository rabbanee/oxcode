<?php

use App\Http\Controllers\API\AttractionController;
use App\Http\Controllers\API\CategoryController;
use App\Http\Controllers\API\CityController;
use App\Http\Controllers\API\ImageController;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\VerificationController;
use Illuminate\Http\Request;
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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('login', [AuthController::class, 'login'])->middleware('verified');
Route::post('register', [AuthController::class, 'register']);

Route::group(['middleware' => 'auth:api', 'verified'], function () {
    Route::get('details',  [AuthController::class, 'details']);
    Route::post('logout', [AuthController::class, 'logout']);
});

Route::get('email/verify/{id}',  [VerificationController::class, 'verify'])->name('verification.verify'); // Make sure to keep this as your route name

Route::get('email/resend', [VerificationController::class, 'resend'])->name('verification.resend');

Route::apiResource('attractions', AttractionController::class);

Route::post('attractions/search', [AttractionController::class, 'search']);

Route::prefix('popular')->group(function () {
    Route::get('attractions', [AttractionController::class, 'popular'])->name('popular.attractions');
    Route::get('cities', [CityController::class, 'popular'])->name('popular.cities');
    Route::get('categories', [CategoryController::class, 'popular'])->name('popular.categories');
});

Route::prefix('category')->group(function () {
    Route::get('attractions', [AttractionController::class, 'popular'])->name('popular.attractions');
    Route::get('cities', [CityController::class, 'popular'])->name('popular.cities');
});

Route::get('categories', [CategoryController::class, 'index']);

Route::get('images/{id}', [ImageController::class, 'index'])->name('image.index');
