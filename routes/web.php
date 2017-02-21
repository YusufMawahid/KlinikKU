<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


// login and Register
Route::get('/', function () {
    return view('login.login');
})->middleware('guest');
Route::post('login','Auth\LoginController@postLogin');
Route::get('logout','Auth\LoginController@getLogout');
Route::post('register','Auth\RegisterController@postRegister');
Route::get('register','Auth\RegisterController@getRegister');


// KASIR
Route::get('kasir','HomeController@kasir_view');
Route::get('mencari_pasien','HomeController@mencari_pasien');
Route::post('tambah_pasien','HomeController@tambah_pasien');
Route::get('delete_pasien/{id}','HomeController@delete_pasien');
Route::post('daftar_pasien_kasir','HomeController@daftar_pasien_kasir');
Route::get('antrian_pasien/{id}','HomeController@antrian_pasien');
/*LIST OBAT*/
Route::get('list_obat','HomeController@list_obat');
Route::get('list_obat_dokter','HomeController@list_obat_dokter');

/*LIST TARIF*/
Route::get('list_tarif','HomeController@list_tarif');
Route::get('list_tarif_dokter','HomeController@list_tarif_dokter');

// DOKTER
Route::post('posttambah_obat/{id}','HomeController@posttambah_obat');
Route::get('delete_pasien_inputkeluhan/{id}','HomeController@delete_pasien_inputkeluhan');
Route::get('dashboard/{id}','HomeController@dashboard');
Route::get('daftar_pasien','HomeController@daftar_pasien');
Route::post('pemeriksaan_post','HomeController@pemeriksaan_post');
Route::get('kalkulator_dosis','HomeController@kalkulator_dosis');
Route::get('taksiran_persalinan','HomeController@taksiran_persalinan');
Route::get('kalender_kb','HomeController@kalender_kb');
Route::post('tambah_taksiran_persalinan','HomeController@tambah_taksiran_persalinan');
Route::post('tambah_kalender_kb','HomeController@tambah_kalender_kb');

// DOKTER 3 LINK
Route::get('dokter','HomeController@dokter_view');
Route::get('selesai_periksa','HomeController@selesai_periksa');

Route::get('periksa','HomeController@periksa');
Route::get('periksa_pasien/{id}','HomeController@pemeriksaan_get');
Route::get('pemeriksaan/{id}','HomeController@pemeriksaan_get');


// USER
Route::get('user','HomeController@user');
Route::post('add_user','HomeController@add_user');
Route::get('delete_user/{id}','HomeController@delete_user');
Route::get('edit_user/{id}','HomeController@edit_user');
Route::post('edit_user/{id}','HomeController@edit_user_post');


// MASTER

Route::get('master','HomeController@master_view');

// TARIF
Route::get('tarif','HomeController@tarif_view');
Route::post('add_tarif','HomeController@add_tarif');
Route::get('edit_tarif/{id}','HomeController@edit_tarif');
Route::post('edit_tarif/{id}','HomeController@post_edit_tarif');
Route::get('delete_tarif/{id}','HomeController@delete_tarif');


// OBAT
Route::get('stok_obat','HomeController@stok_obat');
Route::post('add_obat','HomeController@add_obat');
Route::get('edit_obat/{id}','HomeController@edit_obat');
Route::post('edit_obat/{id}','HomeController@postedit_obat');
Route::get('tambah_obat/{id}','HomeController@tambah_obat');
Route::get('delete_obat/{id}','HomeController@delete_obat');
Route::get('mencari_obat','HomeController@mencari_obat');
// BUKU REGISTER
Route::get('buku_register','HomeController@buku_register');

Route::get('/images/{filename}',
    function ($filename)
{
    $path = storage_path() . '/' . $filename;

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});