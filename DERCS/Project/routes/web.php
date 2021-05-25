<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ridermenu', function () {
    return view('RiderPickupandDelivery');
});

Route::get('/tryRPS', function () {
    return view('RiderPickupStatus');
});

Route::get('/tryRPL', function () {
    return view('RiderPickupList');
});

Route::get('riderPickupList', function()
{
    return view('RiderPickupList');
});

Route::middleware(['auth'])->group(function(){

    Route::middleware(['redirectRider'])->group(function(){
        Route::post('/viewPendingList', [App\Http\Controllers\PickupandDeliveryController::class, 'viewPendingList']);

    });
});

//to upload image evidence and display the evidence
Route::get('/uploadfile','PickupadnDeliveryController@index');
Route::post('/uploadfile','PickupandDEliveryController@showUploadFile');