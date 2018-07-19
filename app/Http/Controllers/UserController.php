<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Work;
use App\User;

class UserController extends Controller
{
    //个人中心页面
    public function index(Work $work)
    {
        $user_id=(\Auth::id());
        $user=\Auth::user();
        $works=\App\Work::where('user_id',$user_id)->orderBy('updated_at','DESC')->get();

        return view('me.index',compact('user','works'));
    }

    //用户登录页面
    public function start(){
        return view('user.login');
    }
    //用户验证逻辑
    public function login()
    {
        //验证
        $this->validate(request(),[
            'xuehao'=>'required|max:13|min:13',
            'password'=>'required|min:6|max:16',
            'is_remember'=>'integer',
        ]);
        //逻辑
        /*$password=bcrypt(request('password'));
        $xuehao=request('xuehao');
        $is_remember=boolval(request('is_remember'));
        dd(["xuehao"=>$xuehao,"password"=>$password]);
        if(\Auth::attempt(["xuehao"=>$xuehao,"password"=>$password],$is_remember)){
            return redirect('/user/me');
        }*/
        $user=request(['xuehao','password']);
        $is_remember=boolval(request('is_remember'));
        if(\Auth::attempt($user,$is_remember)){
            return redirect('/user/work');
        }
        //渲染
        return \Redirect::back()->withErrors("用户密码不匹配");

    }
    //用户登出
    public function  logout()
    {
        \Auth::logout();
        return redirect('/login');
    }

    public function me(){
        if(\Auth::check()){
            return redirect('/login');
        }
        $user_id=(\Auth::id());
        $user=\App\User::find($user_id);
        return view('me.index',compact('user'));
    }
   // 修改个人资料页面
    public function setting(){
        if(!\Auth::check()){
            return redirect('/login');
        }
        $user=\Auth::user();
        return view('me.setting',compact('user'));
    }
    // 修改个人资料逻辑

    public function settingStore(User $user){
        //dd($user);
        $this->validate(request(),[
            'name'=>'required|min:2|max:10',
            'password'=>'required|min:6|max:16|confirmed',
        ]);
        //逻辑
        $name=request('name');
        $password=bcrypt(request('password'));
        $user->name=$name;
        $user->password=$password;
        //逻辑
        $user->save();
        //渲染
        \Auth::logout();
        return redirect('/login');

    }
}
