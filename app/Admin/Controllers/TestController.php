<?php
/**
 * Created by PhpStorm.
 * User: USER-PC
 * Date: 2018/4/26
 * Time: 16:21
 */

namespace App\Admin\Controllers;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;
use App\Work;    // 引入模型
use App\User;
use Illuminate\Support\Facades\Cache;

class TestController extends Controller
{
    public function index()
    {
        $rows = DB::table('works')
            ->rightJoin('users', 'works.user_id', '=', 'users.id')
            ->select('xuehao', 'users.name', 'users.class', 'works.name', 'url1', 'url2', 'memo', 'works.updated_at')->get();
        dd($rows);
    }

}