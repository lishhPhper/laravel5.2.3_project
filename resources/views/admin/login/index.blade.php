
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>后台登录</title>

    <link rel="stylesheet" href="{{ asset('templates/admin/login/css/style.css') }}" />

<body>

<div class="login-container">
    <h1>Login</h1>

    <div class="connect">
        <p>Hello Word</p>

    @if(session('fail'))
        <p style="color:red;font-size: 16px;">{{session('fail')}}</p>
    @endif
    @if (count($errors) > 0)

            <ul>
                @foreach ($errors->all() as $error)
                    <li><p style="color:red;font-size: 16px;">{{ $error }}</p></li>
                @endforeach
            </ul>

    @endif
    </div>
    <form action="{{ url('admin/login') }}" method="post" id="loginForm">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div>
            <input type="text" name="username" value="{{old('username')}}" class="username" placeholder="用户名" autocomplete="off"/>
        </div>
        <div>
            <input type="password" name="password" class="password" placeholder="密码" oncontextmenu="return false" onpaste="return false" />
        </div>
        <div>
            <input type="text" name="validate_code" placeholder="请填写下方图形验证码">

        </div>
        <span>
            <img src="{{url('admin/login/code')}}" class="validate_code" >
        </span>

        <button id="submit" type="submit">登 陆</button>
    </form>

</div>

<script src="{{ asset('templates/admin/login/js/jquery.min.js') }}"></script>
<script src="{{ asset('templates/admin/login/js/common.js') }}"></script>
<!--背景图片自动更换-->
<script src="{{ asset('templates/admin/login/js/supersized.3.2.7.min.js') }}"></script>
<script src="{{ asset('templates/admin/login/js/supersized-init.js') }}"></script>
<!--表单验证-->
<script src="{{ asset('templates/admin/login/js/jquery.validate.min.js?var1.14.0') }}"></script>

<script >
    // 验证码点击换图
    $('.validate_code').on('click', function () {
        $(this).attr('src', '/admin/login/code?random=' + Math.random());
    });
</script>
</body>
</html>