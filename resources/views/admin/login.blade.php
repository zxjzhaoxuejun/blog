@extends('layouts.admin')

@section('title')
    登录
@stop
@section('content')
    <div class="login-box">
        <h1>Blog</h1>
        <h2>欢迎使用博客管理平台</h2>
        <div class="form">

            <form action="" method="post">
                {{csrf_field()}}
                <div class="input-group list-style">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-user" id="basic-user"></span></span>
                    <input type="text" class="form-control" name="user_name" placeholder="用户名" aria-describedby="basic-addon1">
                </div>

                <div class="input-group list-style">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock" id="basic-pass"></span></span>
                    <input type="password" class="form-control" placeholder="登录密码" name="user_pass" aria-describedby="basic-pass">
                </div>


                <div class="input-group list-style">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-qrcode" id="basic-code"></span></span>
                    <input type="text" class="form-control" placeholder="验证码" name="code" aria-describedby="basic-code">
                    <span class="input-group-addon no-padding" style="width: 30%"><img src="{{url('admin/code')}}" alt="code" onclick="this.src='{{url('admin/code')}}?'+Math.random()"></span></span>
                </div>
                @if(session('error'))
                    <p class="bl-error">{{session('error')}}</p>
                @endif

                <input type="submit" value="立即登录" class="btn btn-primary">
            </form>
        </div>
    </div>
@endsection

