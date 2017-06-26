<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegisterController extends Controller
{
    //index方法注册页面
    public function index()
    {
        return view('register.index');
    }

    //注册行为
    public function register()
    {
        //验证
        //unique:表名，字段名
        //confirmed：字段必须和字段_confirmation相同
        $this->validate(request(), [
            'name' => 'required | min:3 | unique:users,name',
            'email' => 'required | email | unique:users,email',
            'password' => 'required | min:5 | max:10| confirmed',
        ]);
//        //业务逻辑
        $name = request('name');
        $email = request('email');
        $password = bcrypt(request('password'));
        $user = User::create(compact('name','email', 'password'));
//        //渲染

        return redirect('/login');
    }
}
