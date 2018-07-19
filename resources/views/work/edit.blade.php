@extends('layout.main')
@section('content')
    <div class="content-wrapper">
        <div class="container">
            <!-- Content Header (Page header) -->
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
            <!-- Main content -->
            <section class="content">
               @include('layout.warn')
                <div class="box box-default">
                    <div class="box-header with-border">
                        <h3 class="box-title">作业更改</h3>
                    </div>
                    <div class="box-body">
                        <div class="content-wrapper">
                            <!-- Main content -->
                            <section class="content">
                                <!-- SELECT2 EXAMPLE -->
                                <div class="row">
                                    <form action="/work/{{$work->id}}/setting" method="POST" name="workform">
                                        {{csrf_field()}}
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>项目名称: <span style="color:#ff0000;font-size:16px;">{{$work->name}}</span></label>
                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>项目大宇服务器链接:</label>

                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-link"></i>
                                                    </div>
                                                    <input type="text" class="form-control" name="url1" placeholder="请输入你的大宇服务器链接" value="{{$work->url1}}">
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
                                                    <input type="text" class="form-control" name="url2" placeholder="请输入你的百度云链接" value="{{$work->url2}}">
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
                                                    <input type="text" class="form-control" name="memo" placeholder="若百度云链接有密码可在此备注" value="{{$work->memo}}">
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
            </section>
            </section>
        </div>
    </div>
    <!-- /.box-body -->

@endsection

