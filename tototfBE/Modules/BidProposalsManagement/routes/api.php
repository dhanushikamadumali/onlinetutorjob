<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use  Modules\BidProposalsManagement\App\Http\Controllers\BidProposalsManagementController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the 'api' middleware group. Enjoy building your API!
|
*/

Route::get( 'allproposals', [ BidProposalsManagementController::class, 'index' ] );
Route::post( 'addproposal/{id}', [ BidProposalsManagementController::class, 'store' ] );
Route::post( 'updateproposal/{id}', [ BidProposalsManagementController::class, 'update' ] );
Route::post( 'deleteproposal/{id}', [ BidProposalsManagementController::class, 'destroy' ] );