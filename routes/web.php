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

Route::get('/', function () {
  	return redirect()->route('login.index');
});


//Login Controllers
Route::get('/login','LoginController@index')->name('login.index');
Route::post('/login','LoginController@loginVerification');


//Student Controllers
Route::get('/studentAccount','StudentController@studentAccount')->name('Student_Portal.studentAccount');
Route::get('/studentAccount/studentProfile','StudentController@studentProfile')->name('Student_Portal.studentProfile');
Route::get('/studentAccount/Course','StudentController@Course')->name('Student_Portal.Course');
Route::get('/studentAccount/ChangePassword','StudentController@ChangePasswordForm')->name('Student_Portal.ChangePassword');
Route::post('/studentAccount/ChangePassword','StudentController@ChangePassword');
Route::get('/studentAccount/ChangePassword_Notice','StudentController@ChangePassword_Notice')->name('Student_Portal.ChangePassword_Notice');
Route::get('/studentAccount/Financials','StudentController@Financials')->name('Student_Portal.Financials');
Route::get('/studentAccount/GradeResult','StudentController@GradeResult')->name('Student_Portal.GradeResult');
Route::get('/studentAccount/Message','StudentController@Message')->name('Student_Portal.Message');
Route::post('/studentAccount/Message','StudentController@MessageStore');
Route::get('/studentAccount/Notes','StudentController@Notes')->name('Student_Portal.Notes');
Route::get('/studentAccount/Notice','StudentController@Notice')->name('Student_Portal.Notice');
Route::get('/studentAccount/OfferCourse','StudentController@OfferCourse')->name('Student_Portal.OfferCourse');
Route::get('/studentAccount/registration','StudentController@registration')->name('Student_Portal.registration');
Route::post('/studentAccount/registration','StudentController@registrationinsert');

Route::get('/studentAccount/registration/Delete/{CourseId}','StudentController@registrationDelete')->name('Student_Portal.registrationDelete');

Route::post('/studentAccount/registration/Delete/{CourseId}','StudentController@registrationDestroy');
Route::get('/studentAccount/RegistrationView','StudentController@RegistrationView')->name('Student_Portal.RegistrationView');
Route::get('/studentAccount/Result','StudentController@Result')->name('Student_Portal.Result');
Route::get('/studentAccount/download', 'StudentController@getDownload')->name('Student_Portal.download');


//Logout Controllers
Route::get('/logout', 'LogoutController@index')->name('logout.logout');
