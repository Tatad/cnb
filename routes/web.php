<?php

use App\Http\Controllers\Admin\TeamController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
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


Auth::routes();//

Route::prefix('/admin')->group(function() {

    Route::get('login', 'Auth\LoginAdminController@showLoginForm')->name('admin.login');
    Route::post('login', 'Auth\LoginAdminController@login');
    Route::get('password/reset', 'Auth\ForgotAdminPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('password/email', 'Auth\ForgotAdminPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('password/reset/{token}', 'Auth\ResetAdminPasswordController@showResetForm')->name('admin.password.reset');
    Route::post('password/reset', 'Auth\ResetAdminPasswordController@reset')->name('admin.password.update');

    Route::group(['middleware' => ['auth:admin']], function() {
        Route::post('logout', 'Auth\LoginAdminController@logout')->name('admin.logout');
        Route::get('register', 'Auth\RegisterAdminController@showRegistrationForm')->name('admin.register');
        Route::post('register', 'Auth\RegisterAdminController@register');
        Route::get('/profile','Auth\EditProfileController@viewProfile');
        Route::put('/profile/update','Auth\EditProfileController@updateProfile');

//        Route::get('/home', 'Admin\HomeController@index');

        Route::get('/', function () {
            return redirect('/admin/banners');
        });

        /*Call Back Requests Routes*/
        Route::get('/call_back', 'Admin\CallBackController@index');
        Route::get('/call_back/list', 'Admin\CallBackController@getList');
        Route::get('/call_back/send_url/{call_back_id}', 'Admin\CallBackController@send_url_view');
        Route::post('/call_back/send_email/{call_back_id}', 'Admin\CallBackController@send_url');
        Route::delete('/call_back/delete/{id}', 'Admin\CallBackController@delete_request');

        /*Home Banner Page Routes*/
        Route::get('/banners', 'Admin\BannerController@index');
        Route::post('/banners/create', 'Admin\BannerController@create');
        Route::put('/banners/update', 'Admin\BannerController@update');

        /*Philosophy Page Routes*/
        Route::get('/philosophies', 'Admin\PhilosophyController@index');
        Route::post('/philosophies/create', 'Admin\PhilosophyController@create');
        Route::put('/philosophies/update', 'Admin\PhilosophyController@update');

        /*Service Page Routes*/
        Route::get('/services', 'Admin\ServiceController@index');
        Route::post('/services/create', 'Admin\ServiceController@create');
        Route::put('/services/update', 'Admin\ServiceController@update');

        /*Membership Page Routes*/
        Route::get('/memberships', 'Admin\MembershipController@index');
        Route::post('/memberships/create', 'Admin\MembershipController@create');
        Route::put('/memberships/update', 'Admin\MembershipController@update');

        /*Career Context Page Routes*/
        Route::get('/careers', 'Admin\CareerContextController@index');
        Route::post('/careers/create', 'Admin\CareerContextController@create');
        Route::put('/careers/update', 'Admin\CareerContextController@update');

        /*Gallery Context Page Routes*/
        Route::get('/galleries', 'Admin\GalleryController@index');
        Route::get('/galleries/list', 'Admin\GalleryController@getList');
        Route::get('/galleries/create', 'Admin\GalleryController@createView');
        Route::get('/galleries/{gallery}', 'Admin\GalleryController@editView');

        Route::post('/galleries', 'Admin\GalleryController@create');
        Route::delete('/galleries/{gallery}', 'Admin\GalleryController@destroy');
        Route::put('/galleries/{gallery}', 'Admin\GalleryController@edit');

        /*Contacts Page Routes*/
        Route::get('/contacts', 'Admin\ContactController@index');
        Route::post('/contacts/create', 'Admin\ContactController@create');
        Route::put('/contacts/update', 'Admin\ContactController@update');

        /*Team Page Routes*/
        Route::get('/team/list', 'Admin\TeamController@getList');
        Route::resource('team', 'Admin\TeamController');
    });
});

Route::post('/contacts/call_back', 'Admin\CallBackController@call_back_request');
Route::post('/payment/create', 'Payment\PaymentController@createPayment');
Route::post('/careers/create', 'Admin\CareerController@createCareer');
Route::post('/upload/file', 'Admin\UploadFileController@uploadFile');
Route::post('/check/email', 'Admin\CheckEmailController@check');
Route::post('/login', 'Payment\PaymentController@loginUser');
//Route::post('/register', 'Auth\RegisterController@register');


Route::get('/', function () {
    return redirect('/home');
});
Route::get('/home', 'Site\HomeController@index')->name('home');
Route::get('/services', 'Site\ServicesController@index');
Route::get('/philosophy', 'Site\PhilosophyController@index');
Route::get('/memberships', 'Site\MembershipsController@index');
Route::get('/register/{token}/{call_back_id}', 'Site\RegistrationController@index');
Route::get('/contact', 'Site\ContactController@index');
Route::get('/gallery', 'Site\GalleryController@index');
Route::get('/gallery/data', 'Site\GalleryController@getData');
Route::get('/career', 'Site\CareerController@index');
Route::get('/team', 'Site\TeamController@index');
Route::get('/termsConditions', 'Site\TermsConditionsController@index');
Route::get('/privacyPolicy', 'Site\PrivacyPolicyController@index');


Route::get('logout', 'Auth\LoginController@logout')->name('user.logout');
//Route::get('/profile/{user_id}', 'Site\ProfileController@index');
Route::group(['middleware' => ['auth:web']], function() {
    Route::get('/profile/{user_id}', 'Site\ProfileController@index');
    Route::put('/profile/users/{user}', 'Admin\ProfileController@update');
});

Route::get('/login/azure', '\App\Http\Middleware\AppAzure@azure');
Route::get('/login/azurecallback', '\App\Http\Middleware\AppAzure@azurecallback');
Route::get('/logout/azure', '\App\Http\Middleware\AppAzure@azurelogout');
Route::get('/test', 'Admin\BannerController@addLog');

Route::get('/getToken', 'Admin\SimplyBookController@getToken');
Route::get('/addClient', 'Admin\SimplyBookController@addClient');
//Route::get('/userLogin', 'Admin\SimplyBookController@userLogin');
Route::get('/getServiceUrl', 'Admin\SimplyBookController@getServiceUrl');
