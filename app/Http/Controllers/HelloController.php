<?php

namespace App\Http\Controllers;

use App\Http\Requests\GreetingRequest;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function greet()
    {
        return view('greeting');
    }

    public function welcome(GreetingRequest $request)
    {
        $username = $request->input('username');

        $request->session()->put('username',$username);

        return view('user',['username' => $username]);
    }

    public function hello(Request $request)
    {
        $username = $request->session()->get('username');

        return view('hello',['username' => $username]);
    }
}
