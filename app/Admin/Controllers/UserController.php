<?php

namespace App\Admin\Controllers;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;
use App\Work;    // 引入模型
use App\User;
use Illuminate\Support\Facades\Cache;    // 引入模型
class UserController extends Controller
{
    use ModelForm;

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('用户信息管理');
            $content->description('在这里可以操作用户信息');

            $content->body($this->grid());
        });
    }

    /**
     * Edit interface.
     *
     * @param $id
     * @return Content
     */
    public function edit($id)
    {
        return Admin::content(function (Content $content) use ($id) {

            $content->header('用户信息修改');
            $content->description('在这里可以编辑用户信息');
            $content->body($this->form()->edit($id));
        });
    }

    /**
     * Create interface.
     *
     * @return Content
     */
    public function create()
    {
        return Admin::content(function (Content $content) {

            $content->header('用户管理');
            $content->description('在这里可以添加团信息');
            $content->body($this->form());
        });
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(User::class, function (Grid $grid) {
            $grid->column('id', 'ID')->sortable();
            $grid->column('xuehao', '学号')->sortable();
            $grid->column('name', '名字')->sortable();
            $grid->column('class', '班级')->sortable();
            $grid->column('password','密码');
            $grid->updated_at('密码状态')->display(function ($updated_at) {
                if ($updated_at) {
                    return "<span style='color:#fff;background: #19be6b;border-radius:5px;padding: 5px'>已修改</span>";
                } else {
                    return "<span style='color:#fff;background: #bbbec4;border-radius:5px;padding: 5px;'>未修改</span>";
                }
            })->sortable();
            $grid->filter(function ($filter) {

                // 设置created_at字段的范围查询

                $filter->equal('xuehao', '学号')->placeholder("按学号查找请在此输入");
                $filter->like('class', '班级')->placeholder("按班级查找请输入:中美,计科,职教");
                $filter->like('name', '姓名')->placeholder("按姓名查找请在此次输入");
            });
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(User::class, function (Form $form) {
            $form->text('xuehao', '学号');
            $form->text('name', "名字");
            $form->text('class', "班级");
            $form->password('password',"密码");
        });
    }
}
