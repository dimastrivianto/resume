<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\LabController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('post-form', [FormController::class, 'postForm'])->name('postForm');

Route::get('send-email/{name}/{email}', [EmailController::class, 'sendEmail'])->name('sendEmail');
Route::get('email-page', [EmailController::class, 'emailPage'])->name('emailPage');
