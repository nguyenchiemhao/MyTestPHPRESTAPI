<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/hello', function () {
    return response()->json([
        'data' => 'Hello',
    ])->header('Access-Control-Allow-Origin', '*');
});

Route::post('/receiver', function (Request $request) {
    return response()->json([
        'data' => $request->all(),
    ])->header('Access-Control-Allow-Origin', '*');
});
