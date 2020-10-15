<?php
use Illuminate\Support\Facades\Route;

include('web_builder.php');

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

// pregix "admin"
Route::prefix('/admin')->group(function(){



    //redirect admin to Login Page
    Route::get('/','AdminController@showLoginForm')->name('admin.login');

    // Login submit route
    Route::post('/loginSubmit','AdminController@attemptLogin')->name('admin.login.submit');

    // logout submit route
    Route::get('/logout','AdminController@logout')->name('admin.login.logout');

    //redirect admin to Register Page
    Route::get('/register','AdminController@showRegisterForm')->name('admin.register');

    // Registration submit Route ( when admin register on site )
    Route::post('/registerSubmit','AdminController@createAdmin')->name('admin.register.submit');

    // forgot password view page router
    Route::get('/forgot_password','AdminController@showForgotForm')->name('admin.forgot');

    // Route with group if admin authenticated
    Route::group(['middleware' => 'auth:admin'], function () {

        //Route to redirect to dashboard
        Route::get('/dashboard','AdminController@showDashboard')->name('admin.view.dashboard');


        //=========================================================================================================
                                        //Users Related Routes start
        //=========================================================================================================

        //Route to redirect to all user view
        Route::get('/users','AdminController@showAllUser')->name('admin.view.users.show');

        // getall users detail route and show in datatable
        Route::get('/getUsers','AdminController@getAllUser')->name('admin.user.get');

        // Route to display view page of user
        Route::get('/users/view/{int:id}','AdminController@showUserDetail')->name('admin.view.user.view');

        // Route to display view Edit page of user
        Route::get('/users/edit/{int:id}','AdminController@EditUserDetail')->name('admin.view.user.edit');

        // Route to submit Edit page of user
        Route::post('/users/edit/submit/{int:id}','AdminController@updateUserDetail')->name('admin.view.user.edit.submit');

       // show add user form
       Route::get('/users/add','AdminController@showAddUserForm')->name('admin.view.users.add');


       // submit add user form
       Route::post('/users/add/submit','AdminController@submitAddUserForm')->name('admin.users.add.submit');

        // Route to delete user
        Route::get('/users/delete/{int:id}','AdminController@deleteUserSoft')->name('admin.users.softdelete');



       //show deleted user form
       Route::get('/users/deleted_user','AdminController@showDeletedUser')->name('admin.view.deleted.users');

       //============================================================================================================
                                    //users relates routes end
       //============================================================================================================



       //=========================================================================================================
                                        //Admin Related Routes start
        //=========================================================================================================

        //Route to redirect to all user view
        Route::get('/admins','AdminController@showAllAdmin')->name('admin.view.admin.show');

        // getall users detail route and show in datatable
        Route::get('/getAdmins','AdminController@getAllAdmin')->name('admin.admin.get');

        // Route to display view page of user
        Route::get('/admins/view/{int:id}','AdminController@showAdminDetail')->name('admin.view.admin.view');

        // Route to display view Edit page of user
        Route::get('/admins/edit/{int:id}','AdminController@EditAdminDetail')->name('admin.view.admin.edit');

        // Route to submit Edit page of user
        Route::post('/admins/edit/{int:id}','AdminController@EditAdminDetail')->name('admin.view.admin.edit');

       // show add user form
       Route::get('/admins/add','AdminController@showAddAdminForm')->name('admin.view.admin.add');

        // Route to delete user
        Route::get('/admins/delete/{int:id}','AdminController@deleteAdminSoft')->name('admin.admin.softdelete');

       // submit add user form
       Route::post('/admins/add/submit','AdminController@submitAddAdminForm')->name('admin.admin.add.submit');


       //============================================================================================================
                                    //Admin relates routes end
       //============================================================================================================

       //============================================================================================================
                                    //Product relates routes start
       //============================================================================================================
      //Route to redirect to all product view
      Route::get('/products','AdminController@showAllProduct')->name('admin.view.product.show');

      // Route to Add new Product
       Route::get('/product/add','ProductController@showAddProductForm')->name('admin.product.add');
       Route::post('/product/add/fetch','ProductController@submitFetchAddProduct')->name('admin.product.add.fetch');
        Route::post('/product/add/submit','ProductController@store')->name('admin.product.add.submit');

        //Route to Fetch all prduct
        Route::get('/getProduct','AdminController@getAllProduct')->name('admin.product.show');


        // CRUD of PRODUCTS
        // Route to display view page of user
        Route::get('/product/view/{int:id}','AdminController@showProductDetail')->name('admin.view.product.view');

        // Route to display view Edit page of user
        Route::get('/product/edit/{int:id}','AdminController@EditProductDetail')->name('admin.view.product.edit');

        // Route to submit Edit page of user
       // Route::post('/product/edit/{int:id}','AdminController@EditProductDetail')->name('admin.view.admin.edit');

        //Route to Redirect to import data View
        Route::get('/products/import','AdminController@showImportProductForm')->name('admin.product.import');
        Route::post('/products/import/submit','ProductController@importData')->name('admin.products.import.submit');

       //============================================================================================================
                                    //Product relates routes End
       //============================================================================================================

    });
});
Route::get('','WebController@index');

Route::get('/dp/{name}','WebController@single');
Route::get('/shop','WebController@shop');
Route::get('/about','WebController@about');
Route::get('/contact','WebController@contact');
Route::get('/verify/{token}','WebController@verify');

Route::post('/search','WebController@search');

// login register route start
Route::get('/store','WebController@store');
Route::get('/login','WebController@login');
Route::post('/login','WebController@loginSubmit');
Route::get('/register','WebController@register');
Route::post('/register','WebController@registerSubmit');
Route::get('/forgot_password','WebController@forgot_password');
Route::post('/forgot_password','WebController@forgot_passwordSubmit');
Route::get('/reset/{token}','WebController@resetPassword');
Route::post('/reset','WebController@resetPasswordSubmit');

// login register route end
Route::get('/send/email', 'WebController@sendVerificatioMail');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard','WebController@dashboard');
    Route::get('/profile','WebController@profile');
    Route::post('/profile','WebController@profileSubmit');
    Route::get('/wishlist','WebController@wishlist');
    Route::get('/recent','WebController@recent');
    Route::get('/buy/{asin}/{user_id}/{product_id}','WebController@buy');
    Route::get('/logout','WebController@logout');

});
Route::post('/wishlist/{action}','WebController@wishlistAction');

Route::get('{name}', 'AdmireController@showView');
