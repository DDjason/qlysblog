<?php

namespace App\Http\Controllers;


use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class SitesController extends Controller
{
    public function test1(){
        //echo "qqqqqqqqqqqq";
        return view('welcome');
    }
    public function test2(){
    	//$name = '<span style = "color:red">qianjun</span>';
    	$first = "qian again";
    	$last = "jun again";
        return view('sites.about', compact('first', 'last'));
    }

    public function contact(){
    	return view('sites.contact');
    }
}
