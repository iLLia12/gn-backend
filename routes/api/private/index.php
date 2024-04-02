<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\FilterController;

Route::resource('/games', GameController::class);
Route::resource('/tags', TagController::class);
Route::resource('/filters', FilterController::class);

?>