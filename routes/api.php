<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PokemonController;

Route::get('list',[PokemonController::class,'index']);