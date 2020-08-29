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

Auth::routes(['register' => false]);
// Backend routes
Route::prefix('admin')->middleware(['auth'])->name('admin.')->group(function () {
     // Regional HR routes
    Route::middleware(['can:manage-region'])->group(function () {
        Route::get('dashboard', 'HomeController@index')->name('dashboard');
        Route::resource('users', 'UserController');
        Route::resource('roles', 'RoleController');
        Route::resource('permissions', 'PermissionController');
        Route::resource('districts', 'DistrictController');

        Route::get('posting/applicants', 'PostingApplicantController@postingApplicant')->name('posting.applicants');
        Route::get('posting/start_posting', 'PostingApplicantController@startPostingApplicant')->name('posting.start_posting');
        Route::get('posting/post_applicants/{district}', 'PostingApplicantController@postApplicants')->name('posting.post_applicants');
        Route::post('posting/post_applicants', 'PostingApplicantController@postApplicantsStore')->name('posting.post_applicants.store');
        Route::delete('posting/applicants/{applicant}', 'PostingApplicantController@postingApplicantDestroy')->name('posting.applicants.destroy');
        Route::get('transfers', 'HomeController@transfer')->name('transfers');
    });

         // District HR routes
    Route::name('district.')->middleware(['can:manage-district'])->group(function () {
        Route::get('district/dashboard', 'HomeController@districtIndex')->name('dashboard');
        Route::resource('schools', 'SchoolController');
        Route::resource('teachers', 'TeacherController');
        Route::post('schools/add_teacher', 'SchoolController@addTeacherToSchool')->name('schools.add_teacher');

    });

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

