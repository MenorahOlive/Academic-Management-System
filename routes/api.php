<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\RegisterController;

use App\Http\Controllers\DepartmentsController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\StaffController;

use App\Http\Controllers\CourseContoller;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\AssesmentItemController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\ClassAllocationController;
use App\Http\Controllers\AdmissionRequestController;
use App\Http\Controllers\sendMailController;
use App\Http\Controllers\apiUnitController;
use App\Http\Controllers\LecturersController;
use App\Http\Controllers\PublicNoticeController;
use App\Http\Controllers\UnitsApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

Route::controller(RegisterController::class)->group(function () {
    Route::post('register', 'register');
    Route::post('login', 'login');
});

Route::controller(RolesController::class)->group(function () {
    Route::get('roles/{id?}', 'index');
    Route::post('roles', 'create');
    Route::delete('roles/{id}/', 'destroy');
});
Route::controller(DepartmentsController::class)->group(function () {
    Route::get("departments/{id?}", 'index');

    Route::post('departments', 'create');
    Route::patch('departments/{id?}', 'update');
});
Route::controller(StaffController::class)->group(function () {
    Route::get("staff/{id?}", 'index');
    Route::post('staff', 'create');
    Route::delete('staff/{id?}', 'destroy');
    Route::put('staff/{id?}', 'update');
});

Route::controller(PublicNoticeController::class) ->group(function () {
    Route::get('public/notices/','index');
    Route::post('public/notices/','create');
});

Route::resource('schools', SchoolController::class);
Route::resource('lecturers', LecturersController::class);
Route::get('/schools/search/{name}', [SchoolController::class, 'search']);

Route::resource('courses', CourseContoller::class);
Route::get('/courses/search/{name}', [CourseContoller::class, 'search']);

Route::resource('admissions/requests', AdmissionRequestController::class);
Route::get('admissions/requests/approve/{id}', [AdmissionRequestController::class, 'approve']);

Route::resource('groups', GroupController::class);
Route::get('/courses/search/{name}', [GroupController::class, 'search']);

Route::resource('assesment', AssesmentItemController::class);
Route::get('/assesment/search/{name}', [AssesmentItemController::class, 'search']);

Route::resource('units',UnitsApiController::class);

Route::resource('announcement', AnnouncementController::class);
Route::get('/announcement/lecturers/{lecid}', [AnnouncementController::class, 'searchLecturer']);
Route::get('/announcement/students/{studid}', [AnnouncementController::class, 'searchStudent']);

Route::resource('allocation', ClassAllocationController::class);
Route::get('/allocation/lecturers/{lecid}', [ClassAllocationController::class, 'searchLecturer']);

Route::get('/mails/acceptance/{address}', [sendMailController::class, 'sendAcceptanceMail']);
Route::get('/mails/message/{address}', [sendMailController::class, 'sendMessageMail']);

Route::get('/mails/acceptance/{address}', [sendMailController::class, 'sendAcceptanceMail']);
Route::get('/mails/message/{address}', [sendMailController::class, 'sendMessageMail']);

Route::middleware('auth:sanctum')->group(function () {
});
