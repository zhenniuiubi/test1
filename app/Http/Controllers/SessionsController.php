<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    //登录页面
    public function create()
    {
        return view('sessions.create');
    }

    //登录逻辑
    public function store()
    {
        $credentials = $this->validate(request(), [
            'email' => 'required|email|max:255',
            'password' => 'required'
        ]);
        dd($credentials);
        return;
    }
    //登出
    public function logout()
    {
        //
    }
}
