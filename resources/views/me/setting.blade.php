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
                    <li><a href="#">个人中心</a></li>
                    <li class="active">个人设置</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
@include('layout.warn')
                <form action="/user/{{$user->id}}/info" method="POST" style="border-color:1px solid #303030">
                    {{csrf_field()}}
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>姓名:</label>

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                </div>
                                <input type="text" class="form-control" name="name" id="name1" placeholder="请务必填写你的真实姓名" value="{{$user->name}}">
                            </div>
                            <!-- /.input group -->
                        </div>
                    </div>

                    <!-- /.form group -->

                    <!-- Date mm/dd/yyyy -->
                    <div class="col-md-5">
                        <div class="form-group">
                            <label>密码:</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-lock"></i>
                                </div>
                                <input type="password" class="form-control" name="password" placeholder="请输入你要修改的密码"
                                       value="">
                            </div>
                            <!-- /.input group -->
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label>确认密码:</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-lock"></i>
                                </div>
                                <input type="password" class="form-control" name="password_confirmation"
                                       placeholder="请确认你要修改的密码" value="">
                            </div>
                            <!-- /.input group -->
                        </div>
                    </div>
                    <div class="col-md-12">
                        @include('layout.notice')
                    </div>

                    <div class="col-md-12">
                        <div class="form-group text-center" style="margin-top: 50px;">
                            <div class="input-group  center-block">
                                <button class="btn btn-success" type="submit">提交</button>
                                <button class="btn btn-default" type="reset"
                                        style="margin-left: 20px;">重置
                                </button>
                            </div>
                            <!-- /.input group -->
                        </div>
                    </div>
                </form>
                <!-- /.box-body -->
        </div>
        <!-- /.box -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.container -->
    </div>
@endsection

