@extends('layouts.admin')
@section('content')
    <div class="right-heade-nav">
        <span class="glyphicon glyphicon-home"></span>
        <a href="{{url('admin/info')}}" class="navbar-link">首页</a>
        &gt;
        <a href="#" class="navbar-link">修改后台密码</a>
    </div>
    <div class="pass-box">
        <h5>修改后台密码</h5>
        <div class="form">
            <form action="" method="post">
                {{csrf_field()}}
                @if(count($errors)>0)
                    @if(is_object($errors))
                        @foreach($errors->all() as $error)
                            <div class="alert alert-warning bl-error">
                                <a href="#" class="close" data-dismiss="alert">
                                    &times;
                                </a>
                                {{$error}}
                            </div>
                        @endforeach
                    @else
                        <div class="alert alert-warning bl-error">
                            <a href="#" class="close" data-dismiss="alert">
                                &times;
                            </a>
                            {{$errors}}
                        </div>
                    @endif
                @endif

                <div class="input-group list-style">
                    <span class="input-group-addon"><span style="color: red">*</span>原密码</span>
                    <input type="password" class="form-control" name="password_o" placeholder="输入原密码" aria-describedby="basic-addon1">
                </div>

                <div class="input-group list-style">
                    <span class="input-group-addon"><span style="color: red">*</span>新密码</span>
                    <input type="password" class="form-control" placeholder="输入新密码" name="password" aria-describedby="basic-pass">
                </div>

                <div class="input-group list-style">
                    <span class="input-group-addon"><span style="color: red">*</span>确认密码</span>
                    <input type="password" class="form-control" placeholder="再次输入新密码" name="password_confirmation" aria-describedby="basic-pass">
                </div>

                <input type="submit" value="保存" class="btn btn-primary">
                <a href="{{url('admin/info')}}" class="btn btn-primary">取消</a>
            </form>
        </div>
    </div>

@endsection