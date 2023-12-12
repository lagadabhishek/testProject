<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('company_info','App\Http\Controllers\CompanyController@comapnyDetails');
Route::post('emp_info', 'App\Http\Controllers\EmpController@employeeData');
Route::get('list_comp', 'App\Http\Controllers\CompanyController@getCompany');
Route::get('emp_info', 'App\Http\Controllers\EmpController@getEmployee');

