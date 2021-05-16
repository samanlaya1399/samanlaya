<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>پنل مدیریت | صفحه ثبت نام</title>
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
    <!-- Google Font: Source Sans Pro -->

    <!-- bootstrap rtl -->
    <link rel="stylesheet" href="{{asset('/dist/css/bootstrap-rtl.min.css')}}">
    <!-- template rtl version -->
    <link rel="stylesheet" href="{{asset('dist/css/custom-style.css')}}">
</head>
<body class="hold-transition register-page">
<div class="register-box">
    <div class="register-logo">
        <b>ثبت نام در سایت</b>
    </div>

    <div class="card">
        <div class="card-body register-card-body">
            <p class="login-box-msg">ثبت نام کاربر جدید</p>

            <form action="{{ route('register') }}" method="post">
                {{ csrf_field() }}
                <div class="input-group mb-3">
                    <input id="name" type="text" class="form-control" placeholder="نام خانوادگی" name="name" value="{{ old('name') }}" required autofocus>
                    @if ($errors->has('name'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                    @endif
                    <div class="input-group-append">
                        <span class="fa fa-user input-group-text"></span>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input id="email" type="text" class="form-control" name="mobile" placeholder="موبایل" value="{{ old('mobile') }}" pattern="[0-9]{11}" maxlength="11" minlength="11" required>

                    @if ($errors->has('mobile'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                    @endif
                    <div class="input-group-append">
                        <span class="fa fa-mobile input-group-text"></span>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input id="password" type="password" class="form-control" name="password" required placeholder="رمز عبور">
                    <div class="input-group-append">
                        <span class="fa fa-lock input-group-text"></span>
                    </div>
                </div>
                <div class="input-group mb-3 form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="تکرار رمز عبور">
                    @if ($errors->has('password'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                    <div class="input-group-append">
                        <span class="fa fa-lock input-group-text"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="checkbox icheck">
                            <label>
                                @if(isset(\App\Information::where('key','rule')->first()->slug))
                                <input type="checkbox" required> با <a href="{{route('page.show.client',['slug'=> \App\Information::where('key','rule')->first()->slug])}}">شرایط</a> موافق هستم
                                @else
                                <input type="checkbox" required> با <a href="#">شرایط</a> موافق هستم
                                @endif
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">ثبت نام</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            {{--<div class="social-auth-links text-center">--}}
                {{--<p>- یا -</p>--}}
                {{--<a href="#" class="btn btn-block btn-primary">--}}
                    {{--<i class="fa fa-facebook mr-2"></i>--}}
                    {{--ثبت نام با اکانت فیس بود--}}
                {{--</a>--}}
                {{--<a href="#" class="btn btn-block btn-danger">--}}
                    {{--<i class="fa fa-google-plus mr-2"></i>--}}
                    {{--ثبت نام با گوگل--}}
                {{--</a>--}}
            {{--</div>--}}

            <a href="{{route('login')}}" class="text-center">من قبلا ثبت نام کرده ام</a>
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="{{asset('/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- iCheck -->
{{-- <script src="{{asset('plugins/iCheck/icheck.min.js')}}"></script>
<script>
 $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass   : 'iradio_square-blue',
      increaseArea : '20%' // optional
    })
  })
</script> --}}
</body>
</html>
