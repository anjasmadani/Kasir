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

Route::group(['middleware' => 'auth:web'], function () {
    Route::get('/dashboard', 'HomeController@index');
    Route::get('/', 'HomeController@index');
	Route::get('/logout', 'LoginController@logout');
	Route::resource('user', 'UserController')->only([
	    'index', 'show', 'store', 'update', 'destroy'
	]);

	Route::resource('user', 'UserController')->except([
	    'create'
	]);

	Route::get('/barang', 'BarangController@index');

	Route::get('/kasir', 'KasirController@index');
	Route::get('/kasir/belanjaan', 'KasirController@belanjaan');

	Route::get('/report', 'ReportController@index');
});

Route::group(['middleware' => 'guest'], function () {
	Route::get('/login', function (){
		return view('login');
	})->name('login');

	Route::post('/login', 'LoginController@login');
});

Route::get('storage/avatars/{filename}', function ($filename)
{
    $path = storage_path('app/public/avatars/' . $filename);

    if (!File::exists($path)) {
        abort(404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});
// Route::get('/user', 'UserController@index');
// Route::post('/user/store', 'UserController@store');

