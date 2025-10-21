<?php

use App\Http\Controllers\PasswordValidatorController;
use Illuminate\Support\Facades\Route;

Route::post("/validate-password", [PasswordValidatorController::class, "validatePassword"]);
