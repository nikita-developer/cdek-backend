<?php

use App\Http\Controllers\Api\MailDogovorController;
use App\Http\Controllers\Api\MailDogovorIpController;
use App\Http\Controllers\Api\MailDogovorYrController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/dogovor-employed', MailDogovorController::class);
Route::apiResource('/dogovor-ip', MailDogovorIpController::class);
Route::apiResource('/dogovor-yr', MailDogovorYrController::class);
