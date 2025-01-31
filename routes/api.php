<?php

// Apparently not needed
// use App\Http\Controllers\Api\V1\CustomerController;
// use App\Http\Controllers\Api\V1\InvoiceController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Appends to the already existing prefix of API (api/v1)
Route::group(["prefix" => "v1", "namespace" => "App\Http\Controllers\Api\V1"], function() {
    Route::apiResource("customers", "CustomerController");
    Route::apiResource("invoices", "InvoiceController");
});