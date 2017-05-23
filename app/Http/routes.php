<?php
Route::get('/', function (){
	return view('index');
});
Route::get('tengah_awal', function (){
	return view('tengah_awal');
});

Route::get('tengah', function (){
	return view('tengah');
});

Route::get('barat_awal', function (){
	return view('barat_awal');
});

Route::get('selatan_awal', function (){
	return view('selatan_awal');
});

Route::get('utara_awal', function (){
	return view('utara_awal');
});

Route::get('timur_awal', function (){
	return view('timur_awal');
});

Route::get('about', function (){
	return view('about');
});

Route::get('login', function (){
	return view('login');
});
Route::get('/login','userC@form');
Route::post('/login','userC@validasi');
Route::get('/logout','userC@logout');


Route::group(['middleware'=>'AutentifikasiUser'], function(){
Route::get('master','userC@index');
Route::get('provinsi','provinsiC@awal');
Route::get('provinsi/tambah','provinsiC@tambah');
Route::get('provinsi/{provinsi}','provinsiC@lihat');
Route::post('provinsi/simpan','provinsiC@simpan');
Route::get('provinsi/edit/{provinsi}','provinsiC@edit');
Route::post('provinsi/edit/{provinsi}','provinsiC@update');
Route::get('provinsi/hapus/{provinsi}','provinsiC@hapus');

Route::get('suku','sukuC@awal');
Route::get('suku/tambah','sukuC@tambah');
Route::get('suku/{suku}','sukuC@lihat');
Route::post('suku/simpan','sukuC@simpan');
Route::get('suku/edit/{suku}','sukuC@edit');
Route::post('suku/edit/{suku}','sukuC@update');
Route::get('suku/hapus/{suku}','sukuC@hapus');

Route::get('kesenian','kesenianC@awal');
Route::get('kesenian/tambah','kesenianC@tambah');
Route::get('kesenian/{kesenian}','kesenianC@lihat');
Route::post('kesenian/simpan','kesenianC@simpan');
Route::get('kesenian/edit/{kesenian}','kesenianC@edit');
Route::post('kesenian/edit/{kesenian}','kesenianC@update');
Route::get('kesenian/hapus/{kesenian}','kesenianC@hapus');

Route::get('kebudayaan','kebudayaanC@awal');
Route::get('kebudayaan/tambah','kebudayaanC@tambah');
Route::get('kebudayaan/{kebudayaan}','kebudayaanC@lihat');
Route::post('kebudayaan/simpan','kebudayaanC@simpan');
Route::get('kebudayaan/edit/{kebudayaan}','kebudayaanC@edit');
Route::post('kebudayaan/edit/{kebudayaan}','kebudayaanC@update');
Route::get('kebudayaan/hapus/{kebudayaan}','kebudayaanC@hapus');

Route::get('bantu','bantuC@awal');
Route::get('bantu/tambah','bantuC@tambah');
Route::get('bantu/{bantu}','bantuC@lihat');
Route::post('bantu/simpan','bantuC@simpan');
Route::get('bantu/edit/{bantu}','bantuC@edit');
Route::post('bantu/edit/{bantu}','bantuC@update');
Route::get('bantu/hapus/{bantu}','bantuC@hapus');

Route::get('provinsi','provinsiC@awal');
Route::get('provinsi/tambah','provinsiC@tambah');
Route::get('provinsi/{provinsi}','provinsiC@lihat');
Route::post('provinsi/simpan','provinsiC@simpan');
Route::get('provinsi/edit/{provinsi}','provinsiC@edit');
Route::post('provinsi/edit/{provinsi}','provinsiC@update');
Route::get('provinsi/hapus/{provinsi}','provinsiC@hapus');

Route::get('user','userC@awal');
Route::get('user/tambah','userC@tambah');
Route::get('user/{user}','userC@lihat');
Route::post('user/simpan','userC@simpan');
Route::get('user/edit/{user}','userC@edit');
Route::post('user/edit/{user}','userC@update');
Route::get('user/hapus/{user}','userC@hapus');

Route::get('member','memberC@awal');
Route::get('member/tambah','memberC@tambah');
Route::get('member/{member}','memberC@lihat');
Route::post('member/simpan','memberC@simpan');
Route::get('member/edit/{member}','memberC@edit');
Route::post('member/edit/{member}','memberC@update');
Route::get('member/hapus/{member}','memberC@hapus');

Route::get('admin','adminC@awal');
Route::get('admin/tambah','adminC@tambah');
Route::get('admin/{admin}','adminC@lihat');
Route::post('admin/simpan','adminC@simpan');
Route::get('admin/edit/{admin}','adminC@edit');
Route::post('admin/edit/{admin}','adminC@update');
Route::get('admin/hapus/{admin}','adminC@hapus');

Route::get('komentar','komentarC@awal');
Route::get('komentar/tambah','komentarC@tambah');
Route::get('komentar/{komentar}','komentarC@lihat');
Route::post('komentar/simpan','komentarC@simpan');
Route::get('komentar/edit/{komentar}','komentarC@edit');
Route::post('komentar/edit/{komentar}','komentarC@update');
Route::get('komentar/hapus/{komentar}','komentarC@hapus');
});