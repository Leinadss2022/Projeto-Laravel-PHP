<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);



Route::get('/produtos', function () {
    return view('produtos');
});

Route::get('/contato', function () {
    return view('contato');
});

Route::get('/eventos', function () {
    return view('eventos');
});


?>
