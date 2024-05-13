<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use  Modules\StudentJobsManagement\App\Http\Controllers\StudentJobsManagementController;

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

Route::middleware(['auth:sanctum'])->prefix('v1')->name('api.')->group(function () {
    Route::get('studentjobsmanagement', fn (Request $request) => $request->user())->name('studentjobsmanagement');
});


Route::group(['middleware' => ['auth:api', 'role:Student' , 'permision:Add Tutor Jobs' ]],
    function () {
        Route::get('alljobs', [StudentJobsManagementController::class, 'index']);
        Route::post('addjob', [StudentJobsManagementController::class, 'store']);
        Route::put('updatejob/{id}', [StudentJobsManagementController::class, 'update']);
        Route::delete('deletejob/{id}', [StudentJobsManagementController::class, 'destroy']);
    }
);
