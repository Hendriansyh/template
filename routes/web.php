<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function ()
{
	return view('about');
});

Route::get('/latihan', function ()
{
	return view('about');
});

Route::get('/latihan/1', function ()
{
	return view('1');
});


Route::get('/latihan/2', function ()
{
	return view('2');
});


Route::get('/latihan/3', function ()
{
	return view('3');
});

Route::get('latihan/{nama}/{sekolah}/{umur}', function($nama,$sekolah,$umur)
{
	return 'Nama Saya: '.$nama.'</br>
	Saya Sekolah Di :'.$sekolah.'</br>
	Umur saya sekitar : '.$umur;
});

Route::get('/about/hendri', function()
{
	$a=' Asep';
	return "Ini Halaman About" . $a;
});


Route::get('testmodel', function()
{
	$a= App\Post::all();
	return $a;
});

Route::get('asik', function()
{
	$a= App\Post::find(1);
	return $a;
});

Route::get('aweu', function()
{
	$a= App\Post::where('title','like','%cepat nikah%')->get();
	return $a;
});


Route::get('asdf', function()
{
	$a= App\Post::find(1);
	$a->title="Ciri Keluarga Sakinah";
	$a->save();
	return $a;
});

Route::get('get', function()
{
	$a= App\Post::find(1);
	$a->delete();
});

Route::get('qwerty', function()
{
	$s= new App\Post;
	$s->title="Jodoh Warisan Bapak";
	$s->content="Jodoh Pengantar Jenazah";
	$s->save();
	return $s;
});




Route::get('/mastah', function ()
{
	return view('layouts.master');
});
