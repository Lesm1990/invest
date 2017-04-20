<?php

namespace invest\Http\Controllers;

use Illuminate\Http\Request;

class frontEnd extends Controller
{
    public function index(){
    	return view('index');
    }
    public function compras(){
    	return view('compras');
    }
    public function login(){
    	return view('login');
    }
}
