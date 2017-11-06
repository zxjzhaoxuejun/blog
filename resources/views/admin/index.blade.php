@extends('layouts.admin')
@section('title')
    首页
@endsection

@section('content')
{{--头部--}}
<nav class="navbar navbar-inverse" style="margin-bottom: 0;border-radius: 0">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu" aria-expanded="false">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="{{url('admin/index')}}">博客管理后台</a>
        </div>
        <div class="collapse navbar-collapse" id="main-menu">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{url('admin/index')}}">首页</a></li>
                <li><a href="{{url('admin/category')}}" target="main">分类管理</a></li>
                <li class="hidden-sm"><a href="{{url('admin/article')}}" target="main">文章管理</a></li>
                <li><a href="#">联系我们</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="javascript:;"><i class="glyphicon glyphicon-user"></i>管理员：admin</a></li>
                <li><a href="{{url('admin/pass')}}" target="main"><i class="glyphicon glyphicon-lock"></i>修改密码</a></li>
                <li><a href="{{url('admin/quit')}}"><i class="glyphicon glyphicon-off"></i>退出</a></li>
            </ul>
        </div>
    </div>
</nav>

    {{--左侧--}}

    <div class="row" style="height: 100%">
        <div class="col-md-2 col-sm-3 left-nav">
            <div class="panel-group" id="accordion" style="margin-top: 10px">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion"
                               href="#collapseOne">
                                <span class="glyphicon glyphicon-folder-open"></span>
                                常用操作
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body lists">
                            <a href="{{url('admin/category/create')}}" class="lists-items" target="main">
                                <span class="glyphicon glyphicon-plus-sign"></span>
                                添加分类
                            </a>
                            <a href="{{url('admin/category')}}" class="lists-items"target="main">
                                <span class="glyphicon glyphicon-list"></span>
                                分类列表
                            </a>
                            <a href="#" class="lists-items">
                                <span class="glyphicon glyphicon-list-alt"></span>
                                Tab页
                            </a>
                            <a href="#" class="lists-items">
                                <span class="glyphicon glyphicon-picture"></span>
                                图片列表
                            </a>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion"
                               href="#collapseTwo">
                                <span class="glyphicon glyphicon-cog"></span>
                                系统设置
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body lists">
                            <a href="#" class="lists-items">
                                <span class="glyphicon glyphicon-plus-sign"></span>
                                添加页
                            </a>
                            <a href="#" class="lists-items">
                                <span class="glyphicon glyphicon-list"></span>
                                列表页
                            </a>
                            <a href="#" class="lists-items">
                                <span class="glyphicon glyphicon-list-alt"></span>
                                Tab页
                            </a>
                            <a href="#" class="lists-items">
                                <span class="glyphicon glyphicon-picture"></span>
                                图片列表
                            </a>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion"
                               href="#collapseThree">
                                <span class="glyphicon glyphicon-wrench"></span>
                                工具导航
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body lists">
                            <a href="#" class="lists-items">
                                <span class="glyphicon glyphicon-plus-sign"></span>
                                添加页
                            </a>
                            <a href="#" class="lists-items">
                                <span class="glyphicon glyphicon-list"></span>
                                列表页
                            </a>
                            <a href="#" class="lists-items">
                                <span class="glyphicon glyphicon-list-alt"></span>
                                Tab页
                            </a>
                            <a href="#" class="lists-items">
                                <span class="glyphicon glyphicon-picture"></span>
                                图片列表
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-md-10 col-sm-9 right-nav">
            {{--右侧--}}
            <iframe src="{{url('admin/info')}}" frameborder="0" width="100%" height="100%" name="main"></iframe>
        </div>
    </div>
<div class="footer navbar-fixed-bottom">
    <div class="user-info">
        &copy;深圳市新友益电子商务有限公司提供技术支持
    </div>
</div>


@endsection