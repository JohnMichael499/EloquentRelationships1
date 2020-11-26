<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class StoresController extends Controller
{
	public function index(){
    //
   DB::table('stores')->get();
	}
}
