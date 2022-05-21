<?php

namespace App\Http\Controllers;

use App\Http\Requests\GreetingRequest;
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

    public function welcome(GreetingRequest $request)
    {
        $username = $request->input('username');

        return view('user',['username' => $username]);
    }
}
