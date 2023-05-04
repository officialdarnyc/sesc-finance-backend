<?php

namespace App\RequestHandlers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(["prefix" => "accounts"], function () {
    Route::post('/', Account\CreateAccountHandler::class);
    Route::get('/', Account\ListAccountsHandler::class);
    Route::get('/student/{studentId}', Account\GetAccountHandler::class);
});

Route::group(["prefix" => "invoices"], function () {
    Route::post('/', Invoice\CreateInvoiceHandler::class);
    Route::get('/', Invoice\ListInvoicesHandler::class);
    Route::get('/reference/{referenceId}', Invoice\GetInvoiceByReferenceHandler::class);
    Route::put('/{referenceId}/pay', Invoice\PayInvoiceHandler::class);
    Route::delete('/{referenceId}/cancel', Invoice\CancelInvoiceHandler::class);
});
