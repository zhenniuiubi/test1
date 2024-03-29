<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class SessionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', [
            'only' => ['create']
        ]);
    }
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

        if (Auth::attempt($credentials, request()->has('remember'))) {
            //登录成功
            if (Auth::user()->activated) {
                session()->flash('success', '欢迎回来');
                $fallback = route('users.show', [Auth::user()]);
                return redirect()->intended($fallback);
            }else{
                Auth::logout();
                session()->flash('warning', '你的账号未激活，请检查邮箱中的注册邮件进行激活');
                return redirect('/');
            }
        } else {
            return redirect()->back()->withInput()->withErrors('账号或密码错误');
        }
    }
    //登出
    public function destroy()
    {
        Auth::logout();
        session()->flash('success', '退出登录');
        return redirect('/login');
    }
}
