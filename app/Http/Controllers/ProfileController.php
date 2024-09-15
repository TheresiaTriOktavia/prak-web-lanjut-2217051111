<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ProfileController extends Controller
{
    public function profile(){
        $data = [
            'nama' => 'Theresia Tri Oktavia',
            'kelas' => 'C',
            'npm' => '2217051111'
        ];

        return view('profile', $data); 
    } 

}
