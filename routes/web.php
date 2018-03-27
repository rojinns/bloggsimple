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
use App\articles;

Route::get('/h', function () {
	// $a= [
	// 	'name'=> 'gobind',
	// 	'roll'=>8,
	// 	'college'=>'ABC'];
	
	// return $a;
	// $services= 'check check check';
 //    return view('index')->with('services',$services);
	return view('welcome');
});

// Route::get('/', 'ArticlesController@indexx');

Route::get('/updatecontent',function()
{
	return view('articles.index');
});


Route::get('/homme', function () {
    return view('firstview');
});

Route::get('about', function(){
	return view('about');
});

Route::get('con','WelcomeController@contact');

Route::get('connn','WelcomeController@cont');

Route::get('info', 'PagesController@abcd');

Route::get('extension', 'PagesController@abc');

Route::get('exten2', 'PagesController@ab');

/*Route::get('articles', 'ArticlesController@index');

Route::get('articles/create', 'ArticlesController@create');

Route::get('articles/{id}','ArticlesController@show');*/

Route::resource('articles','ArticlesController');

/*Route::controllers([
'auth'=> 'Auth\AuthController',
'password'=> 'Auth\PasswordController'
]); */

/*
Route::get('welcome', function(){
	return view('welcome2',[ 'name'=> 'soltee',
	'age'=> 3 ]);

});
*/
// Route::get('welcome', function(){

	
// 	return view('welcome2')->with('name','jigree');


// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
