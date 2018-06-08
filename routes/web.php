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

// Route::get('administrator/', 'CatatanController@index');
// Route::get('administrator/catatan', 'CatatanController@catatan');
// Route::get('administrator/tambah', 'CatatanController@tambah');
// Route::post('administrator/proses', 'CatatanController@pro');
// Route::get('administrator/catatan/{id}', 'CatatanController@show');

// Route::get('administrator/catatan/edit/{id}', 'CatatanController@edit');
// Route::resource('administrator/edit', 'CatatanController@update');
// Route::get('/administrator/daftar', function () {
//     return view('auth/register');
// });

Route::get('administrator/galeri', ['as' => 'image.upload', 'uses' => 'ImageUploadController@imageupload']);
Route::post('administrator/galeri', ['as' => 'image.upload.post', 'uses' => 'ImageUploadController@uploadimage']);
Route::get('administrator/data-galeri', ['uses' => 'ImageUploadController@index']);

Route::get('/', 'BerandaController@index');
Route::get('/catatan', 'BerandaController@catatan');
Route::get('/galeri', 'BerandaController@galeri');
Route::get('/login', function () {
    return view('auth/login');
});
Route::get('/administrator/masuk', function () {
    return view('auth/login');
});
Route::get('administrator/tambah', function () {
    return view('admin/tambah-catatan');
});
Route::get('administrator/tambah', function () {
    return view('admin/tambah-catatan');
});
Route::get('administrator/dashboard', 'CatatanController@dashboard');
Route::get('administrator/komentar', 'CatatanController@komentar');


Route::get('administrator/catatan','CatatanController@catatan');
Route::get('/{id}', 'BerandaController@detail');
Route::get('administrator/catatan/{id}','CatatanController@detail');
Route::get('administrator/edit/{id}','CatatanController@edit');

Route::get('administrator/profil','ProfilController@index');
Route::get('administrator/profil/{id}','ProfilController@edit');

Route::group(['middleware' => ['web']], function() {
    Route::resource('administrator','CatatanController');
    Route::resource('administrator/hapuskomen','KomentarController');
    Route::resource('administrator/proses','ProfilController');
    Route::resource('/proses','KomentarController');
    Route::put('administrator','CatatanController@update');
    Route::put('administrator/proses-ubah/{id}','ProfilController@upd');
});