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

Route::get('/', function () {
    return view('home');
});

Route::get('/login','LoginController@login')->name('login');
Route::post('postlogin', 'LoginController@postlogin');
Route::get('/register','RegisterController@register')->name('register');
Route::post('postregister', 'RegisterController@postregister');
Route::get('/logout','LoginController@logout');


Route::get('/dashboard','DashboardController@index')->name('dashboard');
//siswa
Route::get('/siswa', 'SiswaController@index')->name('siswa'); 
Route::post('/siswa/create','SiswaController@create')->name('siswa.create');
Route::get('/siswa/{id}/edit', 'SiswaController@edit');
Route::post('/siswa/{id}/update', 'SiswaController@update');
Route::get('/siswa/{id}/delete', 'SiswaController@delete');
//guru
Route::get('/guru', 'GuruController@index')->name('guru'); 
Route::post('/guru/create','GuruController@create')->name('guru.create');
Route::get('/guru/{id}/edit', 'GuruController@edit');
Route::post('/guru/{id}/update', 'GuruController@update');
Route::get('/guru/{id}/delete', 'GuruController@delete');
//mapel
Route::get('/mapel', 'MapelController@index')->name('mapel'); 
Route::post('/mapel/create','MapelController@create')->name('mapel.create');
Route::get('/mapel/{id}/edit', 'MapelController@edit');
Route::post('/mapel/{id}/update', 'MapelController@update');
Route::get('/mapel/{id}/delete', 'MapelController@delete');
//kegiatan
Route::get('/jkegiatan', 'JKegiatanController@index')->name('jkegiatan'); 
Route::post('/jkegiatan/create','JKegiatanController@create')->name('jkegiatan.create');
Route::get('/jkegiatan/{id}/edit', 'JKegiatanController@edit');
Route::post('/jkegiatan/{id}/update', 'JKegiatanController@update');
Route::get('/jkegiatan/{id}/delete', 'JKegiatanController@delete');
//jadwal
Route::get('/djadwal', 'DJadwalController@index')->name('djadwal'); 
Route::post('/djadwal/create','DJadwalController@create')->name('djadwal.create');
Route::get('/djadwal/{id}/edit', 'DJadwalController@edit');
Route::post('/djadwal/{id}/update', 'DJadwalController@update');
Route::get('/djadwal/{id}/delete', 'DJadwalController@delete');
//pembuktian
Route::get('/pembuktian', 'PembuktianController@index')->name('pembuktian'); 
Route::post('/pembuktian/create','PembuktianController@create')->name('pembuktian.create');
Route::get('/pembuktian/{id}/edit', 'PembuktianController@edit');
Route::post('/pembuktian/{id}/update', 'PembuktianController@update');
Route::get('/pembuktian/{id}/delete', 'PembuktianController@delete');
//ortu
Route::get('/ortu', 'OrtuController@index')->name('ortu'); 
Route::post('/ortu/create','OrtuController@create')->name('ortu.create');
Route::get('/ortu/{id}/edit', 'OrtuController@edit');
Route::post('/ortu/{id}/update', 'OrtuController@update');
Route::get('/ortu/{id}/delete', 'OrtuController@delete');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

