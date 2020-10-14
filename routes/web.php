<?php

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

Auth::routes(['register' => false]);

// Backend routes
Route::prefix('admin')->middleware(['auth'])->name('admin.')->group(function () {
    // Regional HR routes
    Route::middleware(['can:manage-region'])->group(function () {
        Route::get('dashboard', 'HomeController@index')->name('dashboard');
        Route::resource('users', 'UserController')->except('show');
        Route::resource('roles', 'RoleController')->except('show');
        Route::resource('permissions', 'PermissionController')->except('show');
        Route::resource('districts', 'DistrictController');

        Route::get('posting/applicants', 'ApplicantController@allApplicants')->name('posting.applicants');
        Route::get('posting/start_posting', 'ApplicantController@startPostingApplicant')->name('posting.start_posting');
        Route::post('posting/complete_posting', 'ApplicantController@completePostingApplicant')->name('posting.complete_posting');
        Route::get('posting/applicants/{applicant}', 'ApplicantController@show')->name('posting.applicants.show');
        Route::delete('posting/applicants/{applicant}', 'ApplicantController@postingApplicantDestroy')->name('posting.applicants.destroy');
        Route::get('transfers', 'HomeController@transfer')->name('transfers');
    });

    // District HR routes
    Route::name('district.')->middleware(['can:manage-district'])->group(function () {
        Route::get('district/dashboard', 'HomeController@districtIndex')->name('dashboard');
        Route::resource('schools', 'SchoolController');
        // Route::get('teachers/appointment_letter/download/{teacher}', 'TeacherController@downloadAppointmentLetter')->name('teachers.appointment_letter.download');
        // Route::get('schools/add_teacher', 'SchoolController@addTeacherToSchool')->name('schools.add_teacher');
        Route::post('schools/add_teacher', 'SchoolController@addTeacherToSchool')->name('schools.add_teacher');
        Route::get('teachers/start_posting', 'TeacherController@startPostingTeacher')->name('teachers.start_posting');
        Route::post('teachers/complete_posting', 'TeacherController@completePostingTeacher')->name('teachers.complete_posting');
    });

    Route::get('teachers/appointment_letter/{teacher}', 'TeacherController@showAppointmentLetter')->name('district.teachers.appointment_letter');
    Route::resource('teachers', 'TeacherController')->names('district.teachers');
});

// Frontend routes
Route::get('/', 'FrontendController@home')->name('home');
Route::get('/home', 'FrontendController@home')->name('home');
Route::get('/posting', 'FrontendController@postingPage')->name('posting');
Route::get('/posting/register', 'FrontendController@registerApplicant')->name('posting.register.form');
Route::post('/posting/register', 'FrontendController@storeApplicant')->name('posting.register');
Route::get('/posting/message', 'FrontendController@storeMessage')->name('posting.register.message');
Route::get('/posting/check_status', 'FrontendController@postingCheck')->name('posting.check_status');
Route::get('/posting/check_status/message', 'FrontendController@postingChecked')->name('posting.check_status.message');
Route::get('/transfer/request', 'FrontendController@transferForm')->name('transfer.request');
