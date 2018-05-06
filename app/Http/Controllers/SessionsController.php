<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store(Request $request)
    {
       $credentials = $this->validate($request, [
           'phone' => 'required|digits:11',
           'password' => 'required'
       ]);

       if (Auth::attempt($credentials)) {
        session()->flash('success', '登录成功');
        return redirect()->route('users.show', [Auth::user()]);

       } else {
        session()->flash('danger', '账户或密码错误');
        return redirect()->back();
       }

       return;
    }

    public function destroy()
    {
        Auth::logout();
        session()->flash('success', '您已成功退出！');
        return redirect('login');
    }


}