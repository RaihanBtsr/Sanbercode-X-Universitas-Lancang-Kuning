<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view('pages.register');
    }
    public function welcome(Request $requet)
    {
        $fname = $requet->input('firstname');
        $lname = $requet->input('lastname');
        return view('pages.welcome', ['fname' => $fname, 'lname' => $lname]);
    }
}
