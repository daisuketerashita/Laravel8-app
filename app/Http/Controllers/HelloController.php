<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        return view('hello');
    }

    public function greet()
    {
        return view('greeting');
    }

    public function welcome(Request $request)
    {
        $rule = [
            'username' => 'required|max:20'
        ];
        $request->validate($rule);
        $username = $request->input('username');

        return view('user',['username' => $username]);
    }
}
