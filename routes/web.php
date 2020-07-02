<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
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

Route::get('/', function () {
    return view('welcome');
});

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('/home', [
    'as'=>'client.home',
    'uses' => 'ClientController@home'
]);

Route::get('/aboutUs', [
    'as'=>'client.aboutUs',
    'uses' => 'ClientController@aboutUs'
]);

Route::get('/services', [
    'as'=>'client.services',
    'uses' => 'ClientController@services'
]);

Route::get('/products', [
    'as'=>'client.products',
    'uses' => 'ClientController@products'
]);

Route::get('/projects', [
    'as'=>'client.projects',
    'uses' => 'ClientController@projects'
]);

Route::get('/clients', [
    'as'=>'client.clients',
    'uses' => 'ClientController@clients'
]);

Route::get('/contactUs', [
    'as'=>'client.contactUs',
    'uses' => 'ClientController@contactUs'
]);

Route::post('contactUs', [
    'as'=>'client.sendMessage',
    'uses' => 'SendMailController@store'
]);


// admin
Route::get('/admin', 'HomeController@admin');

// Dashboard
Route::get('users', 'UserController@index')->name('menu.users');
Route::get('languages', 'LanguageTranslationController@index')->name('menu.languages');

Route::get('lang/{lang}', [
'as'=>'lang.switch',
'uses' => 'LanguageController@switchLang'
]);

Route::post('translations/update', 'LanguageTranslationController@transUpdate')->name('translation.update.json');
Route::post('translations/updateKey', 'LanguageTranslationController@transUpdateKey')->name('translation.update.json.key');
Route::delete('translations/destroy/{key}', 'LanguageTranslationController@destroy')->name('translations.destroy');
Route::post('translations/create', 'LanguageTranslationController@store')->name('translations.create');
Route::get('check-translation', function(){
	App::setLocale('fr');
	
	dd(__('website'));
});