<?php

use App\Http\Controllers\ListController;
use Illuminate\Support\Facades\Route;

Route::resource('list',ListController::class)->only(['index']);
