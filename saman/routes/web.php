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


//Route::namespace('Admin')->prefix('admin')->group(function (){
Route::group(['namespace'=>'Admin', 'middleware' =>['auth:web', 'CheckAdmin'], 'prefix'=> 'admin'], function (){
   $this->get('/panel', 'PanelController@index')->name('main.admin.panel');
   $this->get('/panel/slider', 'PanelController@slider')->name('main.admin.slider');
//   $this->get('/panel/devision', 'DevisionController@index')->name('devision.index');
//   $this->get('/panel/devision/create', 'DevisionController@create')->name('devision.create');
//   $this->post('/panel/devision/store', 'DevisionController@store')->name('devision.store');
//   $this->get('/panel/devision/{devision}/edit', 'DevisionController@edit')->name('devision.edit');
//   $this->patch('/panel/devision/{devision}', 'DevisionController@update')->name('devision.update');
//   $this->delete('/panel/devision/{devision}', 'DevisionController@destroy')->name('devision.destroy');
   $this->post('/panel/upload-image', 'PanelController@uploadImageSubject');
   $this->post('/panel/slidernumber', 'PanelController@storeslidernumber')->name('main.admin.slidenum');
   $this->resource('articles', 'ArticleController');
    $this->resource('courses' , 'CourseController');
    $this->resource('episodes' , 'EpisodeController');
    $this->resource('roles' , 'RoleController')->middleware('can:edit-role');
    $this->resource('permissions' , 'PermissionController');
    $this->resource('product' , 'ProductController');
    $this->resource('brand' , 'BrandController');
    $this->resource('grouping' , 'GroupingController');
    $this->resource('type' , 'TypeController');
    $this->resource('color' , 'ColorController');
    $this->resource('size' , 'SizeController');
    $this->resource('property' , 'PropertyController');
    $this->resource('price' , 'PriceController');
    $this->resource('discount' , 'DiscountController');
    $this->resource('offer' , 'OfferController');
    $this->resource('information' , 'InformationController');
//    $this->resource('information' , 'InformationController')->middleware('can:edit-information');
    $this->get('/factor/all','FactorController@all')->name('factor.all');
    $this->get('/factor/success','FactorController@success')->name('factor.success');
    $this->get('/factor/process','FactorController@process')->name('factor.process');
    $this->get('/factor/canceled','FactorController@canceled')->name('factor.canceled');
    $this->get('/factor/{factor}','FactorController@show')->name('factor.show');
    $this->get('/factor/payment/{factor}','FactorController@payment')->name('factor.payment');
    $this->get('/allpro/{type}','PropertyController@allproperty')->name('allpro.index');
    $this->get('/get/grouping','ProductController@grouping')->name('get.grouping');
    $this->get('/get/property','ProductController@property')->name('get.property');
    $this->get('/get/price','ProductController@price')->name('get.price');


    $this->get('/comments/usaccess', 'CommentController@usaccess')->name('unsaccess.comment.admin');
    $this->get('/comments/setapproved/{comment}', 'CommentController@setApproved')->name('comment.set.approved');
    $this->resource('comments' , 'CommentController');
    $this->get('/message/usaccess', 'MessageController@usaccess')->name('unsaccess.message.admin');
    $this->get('/message/setapproved/{message}', 'MessageController@setApproved')->name('message.set.approved');
    $this->resource('message' , 'MessageController');



//    $this->get('/search', 'PanelController@searching');


    $this->group([ 'prefix'=>'users'],function (){
//        $this->get('/','UserController@index');
        $this->get('/','UserController@index')->name('users.index');
        $this->get('/edit/{user}','UserController@editUser')->name('user.edit');
        $this->get('/edit/pass/{user}','UserController@editPass')->name('pass.edit');
        $this->patch('/update/{user}','UserController@update')->name('user.update');
        $this->patch('/update/pass/{user}','UserController@updatePass')->name('pass.update');
        $this->get('/activemonth','UserController@ActiveMonth')->name('users.month');
        $this->get('/activeweek','UserController@ActiveWeek')->name('users.week');
        $this->post('/sms/create','UserController@sendOneSms')->name('users.sms.create');
        $this->post('/sms/action/simple','UserController@sendActionsms')->name('sms.action.simple');
        $this->post('/sms/action/discount','UserController@sendDiscount')->name('discount.action.simple');
        $this->get('/{user}/setadmin','UserController@setAdmin')->name('users.setadmin');
        $this->get('/{user}/setuser','UserController@setUser')->name('users.setuser');
        $this->resource('level' , 'LevelManageController' , ['parameters' => ['level' => 'user']]);
        $this->delete('/{user}/destroy' , 'UserController@destroy')->name('users.destroy');
    });
});
Route::post('/getData' , function(){
    return request()->all();
    $validator = \Validator::make(request()->all(),[
        'name' => 'required',
        'pic' => 'required'
    ]);

    if($validator->fails()) {
        return $validator->errors()->all();
    }

    $galleryUrl = $this->uploadGalleries($this->file('gallery'.'1'),'1');
    return $galleryUrl;
});

Route::get('/' , 'HomeController@index')->name('index.main');
Route::get('activation', 'HomeController@activation')->name('activation');
Route::post('activecode', 'HomeController@activecode')->name('active.code');


Route::get('/product/{slug}' , 'HomeController@product')->name('main.product');
Route::get('/cart' , 'HomeController@cart')->name('main.cart');
Route::get('/mycart' , 'HomeController@myBasket')->name('main.mycart');
Route::get('/contact' , 'HomeController@contact')->name('main.contact');
Route::post('/shipping' , 'HomeController@shipping')->name('main.shipping');
Route::post('/setaddress' , 'HomeController@setaddress')->name('set.address');
Route::get('/payment' , 'HomeController@payment')->name('main.payment');
Route::post('/factor' , 'HomeController@factor')->name('main.factor');
Route::get('/checker' , 'HomeController@checker')->name('main.checker');

Route::get('/list/{slug}' , 'HomeController@group')->name('main.grouping');
Route::get('/list/type/{slug}' , 'HomeController@typing')->name('main.typing');
Route::post('/list/range/price/' , 'HomeController@ranging')->name('main.ranging');
Route::get('/list/keyword/{keyword}' , 'HomeController@keyword')->name('main.keyword');
//Route::get('/lst/' , 'HomeController@lst')->name('main.lst');
Route::get('/article/{slug}', 'HomeController@showpostclient')->name('article.show.client');
Route::get('/blog', 'HomeController@blog')->name('blog.index');
Route::get('/news', 'HomeController@news')->name('news.show.client');
Route::get('/gallery', 'HomeController@gallery')->name('gallery.show.client');
Route::get('/publisher', 'HomeController@publisher')->name('publisher.show.client');
Route::post('/comment', 'HomeController@comment')->name('comment.get.client');
Route::post('/message', 'HomeController@getmessage')->name('message.get.client');
//Route::get('/article/{article}', 'HomeController@showidpost')->name('article.show.id');
Route::resource('mybasket' , 'BasketController');
Route::resource('notify' , 'NotifyController');
Route::get('/mybasket/add/{price_id}/{number}', 'BasketController@add')->name('mybasket.add');
Route::get('/mybasket/remove/{id}', 'BasketController@remove')->name('mybasket.remove');
Route::get('/notify/add/{product_id}', 'NotifyController@add')->name('notify.add');
Route::get('/search', 'HomeController@searchProduct')->name('search.keyword');
Route::get('/page/{slug}', 'HomeController@singlepage')->name('page.show.client');






//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::group(['namespace'=>'Auth'],function (){
    $this->get('login', 'LoginController@showLoginForm')->name('login');
    $this->post('login', 'LoginController@login');
    $this->get('logout', 'LoginController@logout')->name('logout');
//    $this->post('logout', 'LoginController@logout')->name('logout');

    // Registration Routes...
    $this->get('register', 'RegisterController@showRegistrationForm')->name('register');
    $this->post('register', 'RegisterController@register');

    // Password Reset Routes...
    $this->get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
    $this->post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    $this->post('password/mobile', 'ForgotPasswordController@sendActivationCode')->name('password.mobile');
    $this->post('password/newpass', 'ForgotPasswordController@resetPass')->name('new.pass');
    $this->get('password/passform', 'ForgotPasswordController@passForm')->name('pass.form');
    $this->get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
    $this->post('password/reset', 'ResetPasswordController@reset');

    // Activation User
});