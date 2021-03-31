<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{
    public function check(Request $request)
    {
        $data = [
            'username' => $request->username,
            'password' => $request->password,
            'level' => 1,
        ];

        if (Auth::attempt($data)) {
            //true
        } else {
            //false
        }
    }
}