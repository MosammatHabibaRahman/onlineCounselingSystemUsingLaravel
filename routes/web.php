<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/patient',[App\Http\Controllers\PatientsController::class, 'index'])->name('patient.index');

Route::get('/patient/create',[App\Http\Controllers\PatientsController::class, 'create'])->name('patient.create');
Route::post('/patient/create',[App\Http\Controllers\PatientsController::class, 'store']);

Route::get('/patient/profile',[App\Http\Controllers\PatientsController::class, 'profile'])->name('patient.profile');

Route::get('/patient/appointment',[App\Http\Controllers\PatientsController::class, 'appointment'])->name('patient.appointment');
Route::post('/patient/appointment',[App\Http\Controllers\PatientsController::class, 'addReq']);
Route::get('/patient/appointment/{id}',[App\Http\Controllers\PatientsController::class, 'deleteReq'])->name('patient.deleteReq');
Route::get('/patient/pdf',[App\Http\Controllers\PatientsController::class, 'getList'])->name('patient.getList');

Route::get('/patient/docList',[App\Http\Controllers\PatientsController::class, 'docList'])->name('patient.docList');
Route::post('/patient/docList',[App\Http\Controllers\PatientsController::class, 'search']);

Route::get('/patient/prescriptions',[App\Http\Controllers\PatientsController::class, 'prescriptions'])->name('patient.prescriptions');
Route::get('/patient/prescriptions/{date}',[App\Http\Controllers\PatientsController::class, 'getPresc'])->name('patient.getPresc');

Route::get('/patient/subPlans',[App\Http\Controllers\PatientsController::class, 'subPlans'])->name('patient.subPlans');
Route::get('/patient/subPlans/{planId}',[App\Http\Controllers\PatientsController::class, 'editPlan'])->name('patient.editPlan');

Route::get('/patient/createRecord',[App\Http\Controllers\PatientsController::class, 'createRecord'])->name('patient.createRecord');
Route::post('/patient/createRecord',[App\Http\Controllers\PatientsController::class, 'insertRecord']);

Route::get('/patient/updateRecord',[App\Http\Controllers\PatientsController::class, 'updateRecord'])->name('patient.updateRecord');
Route::post('/patient/updateRecord',[App\Http\Controllers\PatientsController::class, 'editRecord']);

Route::get('/patient/updateProfile',[App\Http\Controllers\PatientsController::class, 'updateProfile'])->name('patient.updateProfile');
Route::post('/patient/updateProfile',[App\Http\Controllers\PatientsController::class, 'editProfile']);

Route::get('/patient/changePassword',[App\Http\Controllers\PatientsController::class, 'changePassword'])->name('patient.changePassword');
Route::post('/patient/changePassword',[App\Http\Controllers\PatientsController::class, 'updatePassword']);