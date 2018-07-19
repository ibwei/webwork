@extends('layout.main')
@section('content')
    <div class="content-wrapper">
        <div class="container">
            <section class="content-header">
                <h1>
                    <small>使用必读</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>主页</a></li>
                    <li><a href="#">作业</a></li>
                    <li class="active">作业更改</li>
                </ol>
            </section>
            <!-- Content Header (Page header) -->
            <section class="content">
                @include('layout.warn')
                    <!-- Main content -->
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">作业提交</h3>
                </div>
                <div class="box-body">
                    <div class="content-wrapper" style="border-left: none">
                        <!-- Main content -->
                        <section class="content">
                            <!-- SELECT2 EXAMPLE -->
                            <div class="row">
                                <form action="/user/work" method="POST" name="workform">
                                    {{csrf_field()}}
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>项目名称</label>
                                            <select class="form-control select2" name="name" style="width: 100%;">
                                                <option selected="selected" value="0">未选择</option>
                                                <option value="PHP2">PHP2</option>
                                                <option value="PHP3">PHP3</option>
                                                <option value="php4">PHP4</option>
                                                <option value="php5">PHP5</option>
                                                <option value="php6">PHP6</option>
                                                <option value="php7">PHP7</option>
                                                <option value="php8">PHP8</option>
                                                <option value="php9">PHP9</option>
                                                <option value="bootstrap平时作业地址">bootstrap平时作业地址</option>
                                                <option value="bootstrap大作业地址">bootstrap大作业地址</option>
                                                <option value="八个PHP作业包百度云地址">八个PHP作业包百度云地址</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <label>项目大宇服务器链接:</label>

                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-link"></i>
                                                </div>
                                                <input type="text" class="form-control" name="url1"
                                                       placeholder="请输入项目大宇服务器的链接（务必以http://开头）">
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                    </div>
                                    <!-- /.form group -->

                                    <!-- Date mm/dd/yyyy -->
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <label>项目百度云链接:</label>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-link"></i>
                                                </div>
                                                <input type="text" class="form-control" name="url2"
                                                       placeholder="请输入你的百度云链接">
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <label>备注:</label>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-pencil"></i>
                                                </div>
                                                <input type="text" class="form-control" name="memo"
                                                       placeholder="若百度云链接有密码可在此备注">
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <button class="btn btn-success" type="submit">提交</button>
                                                <button class="btn btn-default" type="reset"
                                                        style="margin-left: 20px;">重置
                                                </button>
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                    </div>

                                </form>


                            </div>
                            @include('layout.notice')


                                    <!-- /.box -->

                            <!-- /.row -->

                        </section>
                        <!-- /.content -->
                    </div>
                </div>
            </div>

            </section></div>
    </div>
    <!-- /.box-body -->

@endsection

