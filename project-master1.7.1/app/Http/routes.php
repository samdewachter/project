    <?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/', 'HomeController@index');
    Route::resource('products', 'ProductsController');
    Route::get('catalogs', 'CatalogsController@index');
    Route::get('catalogs/{product}', 'CatalogsController@show');
    
    Route::get('/maps', 'MapsController@index');
    
    Route::resource('categories', 'CategoriesController');

    Route::get('fases', 'FasesController@index');
    Route::resource('fases', 'FasesController');

    Route::get('questions', 'QuestionController@index');
    Route::get('questions/newQuestion', 'QuestionController@newQuestion');
    Route::post('questions/newQuestions/storeQuestion', 'QuestionController@storeQuestion');
    Route::get('questions/edit/{questions}', 'QuestionController@edit');
    Route::post('questions/update/{id}', 'QuestionController@update');
    Route::get('questions/delete/{questions}', 'QuestionController@destroy');
      Route::get('questions/anwserdelete/{answer}', 'AnswerController@destroy');

    Route::get('{question}/newAnswer', 'AnswerController@newAnswer');
    Route::post('answers/newAnswer/storeAnswer', 'AnswerController@storeAnswer');
    Route::get('catalogs/antwoord/{id}', 'AnswerController@storeAntwoord');
    Route::get('catalogs/antwoord/coin/{userID}', 'AnswerController@storeCoin');

    Route::get('catalogs/antwoord/{userID}/{vraagID}', 'AnswerController@storeAnswerUser');
    
    Route::get('resultaten', 'ResultatenController@index');
    Route::get('resultaten/{project}', 'ResultatenController@results');

    Route::get('coin', 'CoinController@index');
    Route::resource('coin', 'CoinController');

    Route::get('redeemCoins', 'RedeemCoinsController@index');
    Route::get('puntenInwisselen/update', 'RedeemCoinsController@update');

    Route::get('account', 'AccountController@index');
    Route::get('account/{user}', 'AccountController@show');
    Route::get('account/{user}/edit', 'AccountController@edit');
    Route::patch('account/{user}/update', 'AccountController@update');




});


