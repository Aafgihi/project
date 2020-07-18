<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class FirstController extends Controller
{
    //
    public function __construct(){
    		$this -> middleware('auth');
    }
    public function show(){

    	return'hi :) ';
    }
}
