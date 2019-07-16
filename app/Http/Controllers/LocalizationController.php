<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cookie;
use App;


class LocalizationController extends Controller
{
  public function index(Request $request){
  	setcookie('language', $request->change_language);
 	return redirect()->back();
}
}
