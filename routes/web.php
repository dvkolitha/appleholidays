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
    return view('welcome');
});

$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@login');
$this->post('logout', 'Auth\LoginController@logout')->name('logout');
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
 $this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset');



Route::get('/home', 'HomeController@index')->name('home');
Route::get('/adminDashboard', 'DashboardController@admin')->name('admin')->middleware('role');
Route::get('/userDashboard', 'DashboardController@user');

Route::group(['middleware' => ['admin','auth']], function() {
  // protected routes here
  Route::resource('/users','UserController');
  Route::get('/roles','RoleController@index');
  Route::post('/roles/{$user}','UserController@store');

  Route::resource('/parents','ParentsController');
  Route::resource('/classes','ClassController');
  Route::resource('/students','StudentController');

  Route::get('/information','InformationController@index');
  Route::get('/information1','InformationController@student');
  Route::post('/information1/post','InformationController@create');
  Route::get('/mail','MailController@index');
  Route::post('/sendMail','MailController@send')->name('mail.send');
});