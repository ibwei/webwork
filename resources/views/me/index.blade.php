@extends('layout.main')
@section('content')
    <div class="content-wrapper" style="min-height:100px !important;">
        <div class="container">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>

                    <small>使用必读</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>主页</a></li>
                    <li><a href="#">个人中心</a></li>
                    <li class="active">作业列表</li>
                </ol>
            </section>


                    <!-- Main content -->
            <section class="content">
                @include('layout.warn')
                <div class="box-body">
                    <div class="content-wrapper" style="border-left: none;min-height: 100px;">
                        <div class="row">
                            <div class="col-xs-12">

                                <div class="box-header">
                                    <span class="bg-success">已提交作业表</span>

                                    <div class="box-tools">
                                        <div class="input-group input-group-sm" style="width: 150px;">
                                            <input type="text" name="table_search" class="form-control pull-right"
                                                   placeholder="Search">

                                            <div class="input-group-btn">
                                                <button type="submit" class="btn btn-default"><i
                                                            class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="box-body table-responsive no-padding">
                                    <table class="table table-bordered table-striped" style="border-color:green">
                                        <tr>
                                            <th>ID</th>
                                            <th>项目名称</th>
                                            <th>最后提交</th>
                                            <th>大宇链接</th>
                                            <th>百度云链接</th>
                                            <th>备注</th>
                                            <th>操作</th>
                                        </tr>
                                        @foreach($works as $work)
                                            <tr>
                                                <td>{{$work->id}}</td>
                                                <td>{{$work->name}}</td>
                                                <td>{{$work->updated_at->diffForHumans()}}</td>
                                                <td><a href="{{$work->url1}}" target="_blank"/>{{$work->url1}}</a></td>
                                                <td><a href="{{$work->url2}}" target="_blank"/>{{$work->url2}}</a></td>
                                                <td>
                                                    @if($work->memo!='')
                                                        {{$work->memo}}
                                                    @else
                                                        <span>暂无</span>
                                                    @endif

                                                </td>
                                                <td><a href="/user/{{$work->id}}/edit"><span class="label label-success"
                                                                                             style="cursor: pointer">修改</span></a>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </table>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                    </div>
                    <!-- Main content -->

                    <!-- /.content -->
                </div>
                </section>
        </div>
        <!-- /.box-body -->
    </div>

@endsection

