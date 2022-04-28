<?php

use App\Http\Controllers\Api\Parameters\RegionController;
use App\Http\Controllers\Api\Samu\CallController;
use App\Http\Controllers\Api\Samu\GpsController;
use App\Http\Controllers\Api\Samu\MobileController;
use App\Http\Controllers\MedicalProgrammer\SubActivityController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\Some\AppointmentController;
use App\Http\Controllers\IrisController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('calls', [CallController::class, 'index']);
Route::get('mobiles', [MobileController::class, 'index']);
Route::get('region/{region}/communes', [RegionController::class, 'communes']);
Route::get('gps/mobile/{mobile}', [GpsController::class, 'index'])->middleware('auth.basic:,id');


/** RUTAS API HETG **/
Route::prefix('agenda')->name('agenda.')->middleware('client')->group(function (){
    Route::get('/by-day/{date}', [AppointmentController::class, 'getByDay']);
});

Route::prefix('sub-activity')->name('subActivity.')->middleware('client')->group(function (){
    Route::get('/by-id/{id}', [SubActivityController::class, 'getById']);
});

Route::prefix('patient')->name('patient.')->middleware('client')->group(function (){
    Route::get('/by-id/{id}', [PatientController::class, 'getById']);
});
/** FIN RUTAS API HETG **/

/*RUTAS DE API INTEGRACIONES TRAKCARE*/
Route::prefix('iris')->name('iris.')->middleware('iris')->group(function (){
    Route::post('tc_appointment',[IrisController::class,'tc_appointment']);
});
/*FIN RUTAS DE API INTEGRACIONES TRAKCARE*/
