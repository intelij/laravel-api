<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where all API routes are defined.
|
*/


Route::resource("bistros", "BistroAPIController");

Route::resource("boxes", "BoxAPIController");