<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\orangtua;

class mycontroller extends Controller
{
    public function index()
    {
    $a="Oke Google";
    return $a;
}
	public function tampilmodel()
	{
		$ortu=orangtua::all();
		return $ortu;
	}

public function tampilview()
	{
		return view('about');
	}
public function percobaan()
	{
		$ortu=orangtua::all();
		return view('layouts.index',compact('ortu'));
	}


}
