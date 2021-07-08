<?php

use App\Http\Controllers\HomepageController;
use Illuminate\Support\Facades\Route;

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
Route::get('/', 'App\Http\Controllers\HomepageController@index');
Route::get('/about', 'App\Http\Controllers\HomepageController@about');
Route::get('/dash', 'App\Http\Controllers\HomepageController@dash');
Route::get('/produk', 'App\Http\Controllers\HomepageController@produk');
Route::get('/produk/{slug}', 'App\Http\Controllers\HomepageController@produkdetail');
Route::post('pesan/{id}', 'App\Http\Controllers\WomenController@pesan');

//Route::get('/men', 'App\Http\Controllers\HomepageController@men');

//Route::prefix('user')->middleware(['auth', 'user'])->group(function () {
    Route::group(['prefix' => 'member', 'middleware' => 'auth'], function() {
    //index
    Route::resource('/', 'App\Http\Controllers\HomepageController');
    Route::get('/dash',['uses'=>'App\Http\Controllers\HomepageController@dash','as'=>'dash']);
    //Men
    Route::resource('men', 'App\Http\Controllers\MenController');
    Route::get('/sneakers',['uses'=>'App\Http\Controllers\MenController@sneakers','as'=>'sneakers']);
    Route::get('/boots',['uses'=>'App\Http\Controllers\MenController@boots','as'=>'boots']);
    Route::get('/sandals',['uses'=>'App\Http\Controllers\MenController@sandals','as'=>'sandals']);
    //Women
    Route::resource('women', 'App\Http\Controllers\WomenController');
    Route::get('/heels',['uses'=>'App\Http\Controllers\WomenController@heels','as'=>'heels']);
    Route::get('/slipon',['uses'=>'App\Http\Controllers\WomenController@slipon','as'=>'slipon']);
    Route::get('/flats',['uses'=>'App\Http\Controllers\WomenController@flats','as'=>'flats']);
    Route::post('pesan/{id}', 'App\Http\Controllers\WomenController@pesan');
    //Route::get('/show',['uses'=>'App\Http\Controllers\WomenController@flats','as'=>'show']);
    //Order
    Route::resource('cart', 'App\Http\Controllers\CartController');
    //ProfilMember
    Route::resource('profil', 'App\Http\Controllers\ProfilMemberController');
});



/*Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {*/
    Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    //index
    Route::resource('/', 'App\Http\Controllers\DashboardController');
    //Route::get('/index', 'App\Http\Controllers\DashboardController@index');->name('admin');
    Route::get('/admin',['uses'=>'App\Http\Controllers\DashboardController@index','as'=>'admin']);
    //produk
    Route::resource('produk', 'App\Http\Controllers\ProdukController');
    //laporan
    Route::resource('laporan', 'App\Http\Controllers\LaporanController');
    //member
    Route::resource('member', 'App\Http\Controllers\MemberController');
    //pegawai
    Route::resource('pegawai', 'App\Http\Controllers\PegawaiController');
    //transaksi
    Route::resource('transaksi', 'App\Http\Controllers\TransaksiController');
    // image
    Route::get('image', 'App\Http\Controllers\ImageController@index');
    // simpan image
    Route::post('image', 'App\Http\Controllers\ImageController@store');
    // hapus image by id
    Route::delete('image/{id}', 'App\Http\Controllers\ImageController@destroy');
    // upload image produk
    Route::post('produkimage', 'App\Http\Controllers\ProdukController@uploadimage');
    // hapus image produk
    Route::delete('produkimage/{id}', 'App\Http\Controllers\ProdukController@deleteimage');
    //produk
    Route::get('product/{id}', 'App\Http\Controllers\PesanController@index');
    // upload image produk
    
  
});


Route::get('/', function () {
    return view('user.index');
})->name('landingpage');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('dash');
