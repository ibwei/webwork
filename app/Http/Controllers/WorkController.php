<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Work;

class WorkController extends Controller
{
    //作业提交界面
    public function index()
    {
        if(!\Auth::check()){
            return redirect('/login');
        }
        $user = \Auth::user();
        return view('work/index', compact('user','works'));
    }

    //作业提交逻辑
    public function upload(Work $work)
    {
        if(!\Auth::check()){
            return redirect('/login');
        }
        //验证
        if (request('name') == "0") {
            return \Redirect::back()->withErrors("你还未选择项目名称");
        } else {
            $this->validate(request(), [

            ]);
        }
        //逻辑
        $work = request(['url1', 'url2', 'memo', 'name']);
        $work['user_id'] = \Auth::id();

        $status= boolval(Work::where([
            ["name",request('name')],
            ["user_id", \Auth::id()],
        ])->first());
        if ($status)
        {return \Redirect::back()->withErrors("该项目你已经填写，若需修改请前往个人中心");}
        Work::create($work);
        return redirect('/user/me');

    }

    //作业地址修改页面
    public function edit(Work $work)
    {
        if(!\Auth::check()){
            return redirect('/login');
        }
        $user = \App\User::find(\Auth::id());
        return view('work.edit', compact('work', 'user'));

    }

 //地址修改逻辑
    public function editStore(Work $work)
    {
        //dd($work);
        $this->validate(request(), [
            'url1' => 'min:10|max:100|string|required',
            'url2' => 'min:10|max:100|string|required',
        ]);
        //逻辑
        $work = Work::find($work->id);
        $work->url1 = request('url1');
        $work->url2 = request('url2');
        $work->memo = request('memo');
        $work->save();
        //渲染
        return redirect('/user/me');
    }

    public function select(){
        $user = \Auth::user();
        return view('work.select',compact('user'));
    }
    public function doSelect(){

    }
    public function storeSelect(){

    }

}
