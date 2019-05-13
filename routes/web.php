<?php

use Korko\AuthAttempts\Http\Controllers\AuthAttemptsController;

Route::get('auth-attempts', AuthAttemptsController::class.'@index');