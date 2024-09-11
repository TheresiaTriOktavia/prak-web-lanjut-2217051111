<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class UserController extends Controller

{
    public function profile() 
    { 
    return view('profile'); 
    } 

    public function create() 
    { 
    return view('create_user'); 
    } 
}
