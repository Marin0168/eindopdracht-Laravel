<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OefeningController;

Route::resource('oefening', OefeningController::class);