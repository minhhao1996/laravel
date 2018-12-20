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
/*ADMIN*/


Auth::routes(['verify' => true]);

Route::get('/', function () {
    return view('home');
})->middleware('verified');
Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix'=>'admin','middleware' => 'auth'], function () {
    Route::get('/', function () {
        return view('admin.home');
    });
 Route::get('login',[
        'as'=>'login',
        'uses'=>'UserController@login'
    ]);
    Route::post('postLogin',[
        'as'=>'loginPost',
        'uses'=>'UserController@postLogin'
    ]);
    //Category
    Route::group(['prefix'=>'catalog/'],function(){

        Route::get('/',[
            'as'=>'category',
            'uses'=>'CategoryController@index']);

        Route::get('add',[
            'as'=>'getAdd',
            'uses'=>'CategoryController@getAdd']);
        Route::post('add',[
            'as'=>'AddCat',
            'uses'=>'CategoryController@postAdd'
        ]);

        Route::get('edit/{id}',[
            'as'=>'EditCat',
            'uses'=>'CategoryController@edit']);

        Route::post('edit/{id}',[
            'as'=>'postEditCat',
            'uses'=>'CategoryController@postEdit'
        ]);

        Route::get('delete/{id}',[
            'as'=>'deleteCat',
            'uses'=>'CategoryController@delete']);



        Route::get('recyclebin',[
            'as'=>'recyclebin',
            'uses'=>'CategoryController@recyclebin']);

    });
    // Maker
    Route::group(['prefix'=>'maker/'],function(){

        Route::get('/',[
            'as'=>'maker',
            'uses'=>'MakerController@index']);
        Route::get('add',[
            'as'=>'AddMa',
            'uses'=>'MakerController@getAdd']);
        Route::post('add',[
            'as'=>'postAddMa',
            'uses'=>'MakerController@postAdd'
        ]);

        Route::get('edit/{id}',[
            'as'=>'EditMa',
            'uses'=>'MakerController@edit']);

        Route::post('edit/{id}',[
            'as'=>'postEditMa',
            'uses'=>'MakerController@EditMaker'
        ]);

        Route::get('delete/{id}',[
            'as'=>'deleteMa',
            'uses'=>'MakerController@delete']);


    });
    //Product
    Route::group(['prefix'=>'product/'],function(){

        Route::get('/',[
            'as'=>'index',
            'uses'=>'ProductController@index']);

        Route::get('add',[
            'as'=>'getAdd',
            'uses'=>'ProductController@getAdd']);
        Route::post('add',[
            'as'=>'postAdd',
            'uses'=>'ProductController@postAdd'
        ]);

        Route::get('edit/{id}',[
            'as'=>'editP',
            'uses'=>'ProductController@edit']);
        Route::post('edit/{id}',[
            'as'=>'postEditP',
            'uses'=>'ProductController@postEdit'
        ]);

        Route::get('delete/{id}',[
            'as'=>'deleteP',
            'uses'=>'ProductController@delete']);

        Route::get('delimg/{id}',[
            'as'=>'delImage',
            'uses'=>'ProductController@delImage']);

        Route::get('status/{id}',[
            'as'=>'status',
            'uses'=>'ProductController@status']);

        Route::get('import/{id}',[
            'as'=>'import',
            'uses'=>'ProductController@import']);

        Route::post('import/{id}',[
            'as'=>'postImport',
            'uses'=>'ProductController@postImport'
        ]);


        Route::get('recyclebin',[
            'as'=>'recyclebin',
            'uses'=>'ProductController@recyclebin']);

    });

    Route::group(['prefix'=>'user/'],function(){

        Route::get('/',[
            'as'=>'user',
            'uses'=>'UserController@index']);

        Route::get('edit/{id}',[
            'as'=>'EditUser',
            'uses'=>'UserController@edit']);

        Route::post('edit/{id}',[
            'as'=>'postEditUs',
            'uses'=>'UserController@EditUser'
        ]);

        Route::get('delete/{id}',[
            'as'=>'deleteMa',
            'uses'=>'UserController@delete']);


    });

});








/*FONT_END*/





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
