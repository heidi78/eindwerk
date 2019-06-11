<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\User;
use Illuminate\Http\Request;

class DashboardController extends HomeController
{
    //
    public function __contstruct(){
    	$this->middleware('auth');
    }

    public function index(){
    	return view('admin.index');
    }
}
