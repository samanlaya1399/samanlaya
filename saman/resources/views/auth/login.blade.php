<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ورود به سامان لعیا</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('/plugins/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('/plugins/ionicon/ionicons.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('/dist/css/adminlte.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('/plugins/iCheck/flat/blue.css')}}">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{asset('/plugins/morris/morris.css')}}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{asset('/plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{asset('/plugins/datepicker/datepicker3.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('/plugins/daterangepicker/daterangepicker-bs3.css')}}">
    {{--bootstrap3--}}
    <link rel="stylesheet" href="{{asset('/plugins/bootstrap/css/bootstrap.min.css')}}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{asset('/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
    {{--bootsrap select--}}
    <link rel="stylesheet" href="{{asset('/dist/css/bootstrap-select.min.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <!-- bootstrap rtl -->
    <link rel="stylesheet" href="{{asset('/dist/css/bootstrap-rtl.min.css')}}">
    <!-- template rtl version -->
    <link rel="stylesheet" href="{{asset('dist/css/custom-style.css')}}">


</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="{{route('login')}}"><b>ورود به سایت</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">فرم زیر را تکمیل کنید و ورود بزنید</p>

            <form  method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-12 control-label">شماره موبایل</label>

                    <div class="col-md-12">
                        <input id="email" type="text" class="form-control" name="mobile" value="{{ old('mobile') }}" required autofocus pattern="[0-9]{11}" maxlength="11" minlength="11">

                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="col-md-12 control-label">پسورد</label>

                    <div class="col-md-12">
                        <input id="password" type="password" class="form-control" name="password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <div class="row">

                    <div class="form-group">
                        <div class="col-md-12 col-md-offset-12">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">ورود</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            {{--<div class="social-auth-links text-center mb-3">--}}
                {{--<p>- OR -</p>--}}
                {{--<a href="#" class="btn btn-block btn-primary">--}}
                    {{--<i class="fa fa-facebook mr-2"></i> ورود با اکانت فیسوبک--}}
                {{--</a>--}}
                {{--<a href="#" class="btn btn-block btn-danger">--}}
                    {{--<i class="fa fa-google-plus mr-2"></i> ورود با اکانت گوگل--}}
                {{--</a>--}}
            {{--</div>--}}
            <!-- /.social-auth-links -->

            <p class="mb-1">
                <a href="{{ route('password.request') }}">رمز عبورم را فراموش کرده ام.</a>
            </p>
            <p class="mb-0">
                <a href="{{ route('register') }}" class="text-center">ثبت نام</a>
            </p>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->

@include('panel.section.script')
<!-- iCheck -->
{{--<script src="{{asset('plugins/iCheck/icheck.min.js')}}"></script>--}}
{{--<script>--}}
    {{--$(function () {--}}
        {{--$('input').iCheck({--}}
            {{--checkboxClass: 'icheckbox_square-blue',--}}
            {{--radioClass   : 'iradio_square-blue',--}}
            {{--increaseArea : '20%' // optional--}}
        {{--})--}}
    {{--})--}}
{{--</script>--}}
</body>
</html>
