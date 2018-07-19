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
use App\Admin\Extensions\ExcelExpoter;

class WorkController extends Controller
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

            $content->header('作业管理');
            $content->description('在这里可以操作作业');

            $content->body($this->grid());
        });
    }

    /**
     * Edit interface.
     *
     * @param $id
     * @return Content
     */


    /**
     * Create interface.
     *
     * @return Content
     */

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(Work::class, function (Grid $grid) {
            $grid->column('id', 'ID')->sortable()->label("success");
            $grid->column('user.name', '名字')->sortable();
            $grid->column('user.class','班级')->sortable();
            $grid->column('user.xuehao','学号')->sortable();
            $grid->column('name',"项目名")->sortable();
            $grid->url1('大宇地址')->display(function ($url1) {
                    return '<a href='.$url1.' target="_blank">'.$url1.'</a>';
            })->sortable();
            $grid->url2('百度云地址')->display(function ($url2) {
                return '<a href='.$url2.' target="_blank">'.$url2.'</a>';
            })->sortable();
            $grid->column('memo','百度云备注');
            $grid->column('updated_at', '最后提交')->sortable();
            $grid->filter(function ($filter) {
                $filter->equal('user.xuehao', '学号')->placeholder("按学号查找请在此输入");
                $filter->like('user.class', '班级')->placeholder("按班级查找请输入:中美,计科,职教");
                $filter->like('user.name', '姓名')->placeholder("按姓名查找请在此次输入");
                $filter->like('name', '项目')->placeholder("按项目查找请在此次输入");
            });
            $grid->disableCreateButton();
            $grid->disableActions();
            $grid->exporter(new ExcelExpoter());

        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {

    }
}
