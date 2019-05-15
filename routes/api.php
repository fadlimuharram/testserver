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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('performances', 'PerformanceController@index');
Route::get('performances/monthly', 'PerformanceController@monthly');
Route::get('inboxes', 'InboxController@index');
Route::get('notifications', 'NotificationController@index');
