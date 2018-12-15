<?php
Route::get('/',function(){
  return redirect()->route('login');
  // return view('dashboard');
});

Route::get('dashboard', 'DashboardController@index')->name('dashboard.index');
Route::resource('penduduk', 'PendudukController');
Route::resource('dusun', 'DusunController');
Route::resource('kartukeluarga', 'KartuKeluargaController');
Route::resource('detailkartukeluarga', 'DetailKartuKeluargaController');
Route::resource('kematian', 'KematianController');
Route::resource('kelahiran', 'KelahiranController');
Route::resource('mutasi', 'MutasiController');
Route::resource('surat', 'SuratController');
Route::resource('user', 'UserController');

//auth laravel
Auth::routes();
