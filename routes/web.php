<?php


use App\Special;


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

Route::get('/callSqlonWeb', function () {


});


Auth::routes();


Route::get('/', 'ProductsController@SpeLoad');

Route::resource('/user_info', 'UserController');

Route::resource('/free_issue', 'FreeIssueController');

Route::resource('/item', 'ItemController');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/main', 'Main@index')->name('main');
Route::get('/about', 'Main@index')->name('about');
Route::get('/service', 'Main@service')->name('service');
Route::get('/product','Main@product')->name('product');
//Route::get('/bt', 'Main@bt')->name('bt');
Route::get('/poulet','Main@search')->name('poulet');
Route::get('/ch','Main@ch')->name('ch');
Route::get('/cocktail','Main@cocktail')->name('cocktail');
Route::get('/fillet','Main@fillet')->name('fillet');
Route::get('/huft','Main@huft')->name('huft');
Route::get('/offer', 'Main@offer')->name('offer');
Route::get('/nierstuck','main@nierstuck')->name('nierstuck');


Route::get('/home1','main@home')->name('home1');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/reg','RegisterCon@index')->name('reg');

Route::get('/ex','OrderController@external')->name('ex');


Route::post('/orderSum', 'OrderController@sumFilter');

Route::resource('/order', 'OrderController');

Route::get('/SaveOrder/{id}','ProductsController@save');






Route::get('cart', 'ProductsController@cart');
 
Route::get('add-to-cart1/{id}/{id1}', 'ProductsController@addToCart');

Route::get('add-to-cart/{id}/', 'ProductsController@addToCart');

Route::patch('update-cart', 'ProductsController@update');
Route::patch('update-car', 'ProductsController@updat');

Route::get('update-ca/{id}/', 'ProductsController@upda');

Route::post('pay', 'ProductsController@pay')->name('pay');

Route::patch('ajaxsearch', 'ProductsController@ajax');
 
 Route::delete('remove-from-cart', 'ProductsController@remove');

 Route::get('ajaxRequest', 'HomeController@ajaxRequest');

Route::post('ajaxRequest', 'HomeController@ajaxRequestPost');

Route::get('/getEmployees', 'ProductsController@index'); // localhost:8000/
//Route::get('/getEmployees/{id}', 'PagesController@getEmployees');
Route::get('/getEmployees1/{id}', 'ProductsController@getEmployees1');

Route::get('/getOrderfilter/{ty}/{from}/{to}', 'ProductsController@getOrderfilter');

Route::get('/catsearch','CategoryController@index');

Route::post('/test1','StripePaymentController@store1')->name('s');

Route::get('/orderSave','OrderController@store');

Route::get('/browse', 'ImageController@index')->name('browse');

Route::get('/info', 'ImageController@Infoindex')->name('info');

Route::get('/browseInfo', 'ImageController@infoView')->name('Browseinfo');

Route::get('/updateSpecial','ImageController@createFreeView')->name('createFreeView');


Route::get('/updateFree/{id}','ImageController@createFreeUpdate')->name('createFreeUpdate');

Route::post('/udpateSpe', 'ImageController@updateSpecial')->name('update.spe');

Route::get('/save','ImageController@save')->name('save');

Route::post('/browse/update', 'ImageController@updateProfile')->name('browse.update');

Route::post('/browse/info', 'ImageController@updateInfo')->name('update.info');

Route::get('/browseSpecial', 'ImageController@specialIndex')->name('browse.spe');

Route::post('/update1', 'ProductsController@up')->name('up');

Route::post('/save/update', 'ImageController@addPro')->name('save.update');

Route::post('/UserUpdate/{id}', 'UserController@addPro1')->name('user.update');

Route::post('/FreeUpdate/{id}', 'FreeIssueController@addPro1')->name('free.update');

// Route::post('/UserUpdate/{id}', 'UserController@addPro1')->name('us.add');

// Route::post('/save/update', 'ImageController@addPro')->name('save.update');

Route::post('/regPost', 'regCon@create1')->name('regPost');
Route::get('search/','CategoryController@search');
Route::get('update/','ImageController@UpdateIndex');
Route::get('/getProducts/{id}', 'CategoryController@getProducts');


///Route::delete('remove-from-cart', array('middleware' => 'cors', 'uses' => 'ProductsController@remove'));
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/specialCon', 'ItemController@specialCon')->name('specialCon');


Route::get('delete/{id}','ItemController@destroy');

Route::get('update/{id}','UserController@show');

Route::get('free_update/{id}','FreeIssueController@show');

Route::get('deleteSpecial/{id}','ItemController@destroySpe');

Route::post('/ss', 'StripePaymentController@stripe1');



Route::get('intervention-resizeImage',['as'=>'intervention.getresizeimage','uses'=>'FileController@getResizeImage']);
Route::post('intervention-resizeImage',['as'=>'intervention.postresizeimage','uses'=>'FileController@postResizeImage']);

Route::post('/hm', function() {
    $user=session('user');
    dd($user);
    return view('home', $user);
})->name('newusr');