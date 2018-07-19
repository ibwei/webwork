<?php
/**
 * Created by PhpStorm.
 * User: USER-PC
 * Date: 2018/4/26
 * Time: 10:51
 */
namespace App\Admin\Extensions;

use Encore\Admin\Grid\Exporters\AbstractExporter;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;
use App\Work;    // 引入模型
use App\User;

class ExcelExpoter extends AbstractExporter
{
    public function export()
    {

        Excel::create('计科专业平时作业链接一览表', function($excel) {

            $excel->sheet('计科专业平时作业链接', function($sheet) {

                // 这段逻辑是从表格数据中取出需要导出的字段
                $rows =DB::table('works')
                ->join('users','works.user_id','=','users.id')
                ->select('xuehao','users.name','users.class','works.name','url1','url2','memo','works.updated_at')
                    ->get();

                $sheet->rows($rows);

            });

        })->export('xls');
    }

}
