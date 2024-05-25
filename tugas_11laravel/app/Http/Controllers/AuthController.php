<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class AuthController extends Controller
{
    public function register()
    {
        return view('Register');
    }

    public function welcome (Request $request)
    {
        $fname = $request->input('fname');
        $lname = $request->input('lname');
        
        return view('welcome', ['fname' => $fname, 'lname' => $lname]);
    }
}
