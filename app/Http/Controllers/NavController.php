<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavController extends Controller
{
    public function index() 
    {
       return view('welcome');
       
    }
    public function page_2() 
    {
       return view('/page2');
       
    }
    public function page_3() 
    {
       return view('/page3');
       
    }
    
}
