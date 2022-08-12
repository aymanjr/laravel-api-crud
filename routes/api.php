<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//show employee
Route::get('/employees', [EmployeeController::class, 'getEmployee']);
// show exact employee
Route::get('/employee/{id}', [EmployeeController::class, 'getEmployeeByid']);
//add employee
Route::post('/addemployee',[EmployeeController::class,'addEmployee']);
//edit employee
Route::put('/updateEmployee/{id}',[EmployeeController::class,'updateEmployee']);
//delete employee
Route::delete('/deleteEmployee/{id}',[EmployeeController::class,'deleteEmployee']);

