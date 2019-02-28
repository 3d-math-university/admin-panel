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

Route::get('/github/pull', function (Request $request) {
    if($request->secret == 'test') echo 1;
        else abort(403);
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
