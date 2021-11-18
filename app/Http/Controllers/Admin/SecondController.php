<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Mockery\Generator\Method;

class SecondController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('showString1');
    }
    public function showString0(){
        return 'static string000';
    }
    public function showString1(){
        $data=['ali','mohamed'];
        return view('welcome',compact('data'));
       // return view('welcome')->with(['name'=>'yahya','age'=>5]);

       // return 'static string111';
    }
    public function showString2(){

       // return 'static string2222';
    }
}
