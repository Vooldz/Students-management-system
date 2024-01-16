<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\Students\GetStudentController;
use App\Http\Controllers\Api\V1\Students\ShowStudentController;
use App\Http\Controllers\Api\V1\Students\StoreStudentController;
use App\Http\Controllers\Api\V1\Students\DeleteStudentController;
use App\Http\Controllers\Api\V1\Students\UpdateStudentController;
use App\Http\Controllers\Api\V1\Students\StudentAttendanceController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix'=> '/v1'], function () {
    Route::get('/students', [GetStudentController::class,'index']);
    Route::post('/students', [StoreStudentController::class, 'store']);
    Route::get('/students/{student}', [ShowStudentController::class,'show']);
    Route::delete('/students/{student}', [DeleteStudentController::class,'destroy']);
    Route::patch('/students/{student}', [UpdateStudentController::class,'update']);
    Route::patch('/is-attendance', [StudentAttendanceController::class,'is_attendance']);
});

