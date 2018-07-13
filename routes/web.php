<?php
Route::get('/', function () { return view('welcome'); })->name('welcome');
Route::get('/aboutus', function () {
    return view('about-us');
})->name('aboutus');


// Authentication Routes...
$this->get('login', 'Auth\LoginController@showLoginForm')->name('auth.login');
$this->post('login', 'Auth\LoginController@login')->name('auth.login');
$this->post('logout', 'Auth\LoginController@logout')->name('auth.logout');
//register Route
$this->get('register', function(){
  return view('auth.register');
})->name('auth.register');
$this->post('register', 'Admin\UsersController@storereg')->name('auth.register');

// Change Password Routes...
$this->get('change_password', 'Auth\ChangePasswordController@showChangePasswordForm')->name('auth.change_password');
$this->patch('change_password', 'Auth\ChangePasswordController@changePassword')->name('auth.change_password');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('auth.password.reset');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('auth.password.reset');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset')->name('auth.password.reset');

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/home', 'HomeController@index');
    Route::resource('abilities', 'Admin\AbilitiesController');
    Route::post('abilities_mass_destroy', ['uses' => 'Admin\AbilitiesController@massDestroy', 'as' => 'abilities.mass_destroy']);
    Route::resource('roles', 'Admin\RolesController');
    Route::post('roles_mass_destroy', ['uses' => 'Admin\RolesController@massDestroy', 'as' => 'roles.mass_destroy']);
    Route::resource('users', 'Admin\UsersController');
    Route::post('users_mass_destroy', ['uses' => 'Admin\UsersController@massDestroy', 'as' => 'users.mass_destroy']);

});
Route::post('/appointments', 'AppointmentController@store')->name('storeappointment');
Route::patch('/appointment/{id}', 'AppointmentController@update')->name('updateappointment');
Route::get('/appointments','AppointmentController@index')->name('indexappointment');
Route::get('/appointment/del/{id}','AppointmentController@destroy')->name('delappointment');
Route::get('/appointment/{id}','AppointmentController@edit')->name('editappointment');
Route::get('/appointment','AppointmentController@create')->name('createappointment');

Route::post('/medrecords', 'MedicalrecordController@store')->name('storemedrecord');
Route::patch('/medrecord/{id}', 'MedicalrecordController@update')->name('updatemedrecord');
Route::get('/medrecords','MedicalrecordController@index')->name('indexmedrecord');
Route::get('/medrecord/del/{id}','MedicalrecordController@destroy')->name('delmedrecord');
Route::get('/medrecord/{id}','MedicalrecordController@edit')->name('editmedrecord');
Route::get('/medrecord','MedicalrecordController@create')->name('createmedrecord');
Route::get('/home', 'HomeController@index')->name('index');
