<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\orangtua;
use App\anak;

class MyController extends Controller
{
    public function index(){
    	$a = "Nama Saya Indah Putri Nabila";
    	return $a;
    }

    public function tampilan(){
    	return view ('about');
    }

    public function model(){
    	$ortu =orangtua::all();
    	$anak = anak::all();
    	return view('about',compact('ortu','anak'));
    }

   
}
