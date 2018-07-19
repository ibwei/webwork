<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>2016级计科专业作业提交平台|for PHP</title>
    <!-- Tell the browser to be responsive to screen width -->
    <link rel="shortcut icon" href="/images/logo1.png">
    <meta name="Keywords" content="2016级计科专业作业提交平台,重庆师范大学">
    <meta name="Description" content="这里是重庆师范大学计信学院2016级计科专业提交的网站。">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../../plugins/iCheck/square/blue.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="#">--&nbsp;&nbsp;&nbsp;<b>LOGIN</b>&nbsp;&nbsp;&nbsp;--</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">2016级计科（中美，职教）作业提交入口</p>

        <form action="/login" method="post">
            {{ csrf_field() }}
            <div class="form-group has-feedback">
                <input type="text" name="xuehao" class="form-control" placeholder="请输入你的学号">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" name="password" class="form-control" placeholder="初始密码123456">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            @include('layout.notice')
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox" name="is_remember" value="1"> 记住我
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">登录</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <div class="social-auth-links text-center">
            <p>- NOTICE -</p>
            <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-bullhorn"></i> 平台仍在完善，且用且珍惜</a>
            <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-bullhorn"></i> 有任何问题可以联系课代表</a>
        </div>
        <!-- /.social-auth-links -->

        <a href="tencent://message/?uin=997132391&amp;Menu=yes">我忘记密码（重置后的密码）</a><br>
        <a href="tencent://message/?uin=997132391&amp;Menu=yes">联系我们</a>

    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
</body>
</html>
