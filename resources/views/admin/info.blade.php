@extends('layouts.admin')

@section('content')
    <div class="right-heade-nav">
        <span class="glyphicon glyphicon-home"></span>
        <a href="{{url('admin/info')}}" class="navbar-link">首页</a>
        &gt;
        <a href="#" class="navbar-link">系统基本信息</a>
    </div>
<div class="kj-mode">
    <div class="text-title">
        快捷操作
    </div>
    <div class="qk-nav">
        <a class="navbar-link">
            <span class="glyphicon glyphicon-plus"></span>
            新增文章
        </a>
        <a class="navbar-link">
            <span class="glyphicon glyphicon-trash"></span>
            批量删除
        </a>
        <a class="navbar-link">
            <span class="glyphicon glyphicon-refresh"></span>
            更新排序
        </a>
    </div>
</div>

<div class="table-list-info">
    <div class="text-title">
        系统基本信息
    </div>
    <ul class="list-group table-li">
        <li class="list-group-item">
            <span class="list-group-item-name">操作系统：</span>
            <span class="list-group-item-text">{{PHP_OS}}</span>
        </li>
        <li class="list-group-item">
            <span class="list-group-item-name">运行环境：</span>
            <span class="list-group-item-text">{{$_SERVER['SERVER_SOFTWARE']}}</span>
        </li>
        <li class="list-group-item">
            <span class="list-group-item-name">版本：</span>
            <span class="list-group-item-text">v-1.0</span>
        </li>
        <li class="list-group-item">
            <span class="list-group-item-name">上传附件限制：</span>
            <span class="list-group-item-text"><?php echo get_cfg_var("upload_max_filesize")?get_cfg_var("upload_max_filesize"):"不允许上传附件"; ?></span>
        </li>
        <li class="list-group-item">
            <span class="list-group-item-name">时间：</span>
            <span class="list-group-item-text"><?php echo date('Y年m月d日 H时i分s秒');?></span>
        </li>
        <li class="list-group-item">
            <span class="list-group-item-name">服务器域名/IP：</span>
            <span class="list-group-item-text">{{$_SERVER['SERVER_NAME']}} {{$_SERVER['SERVER_ADDR']}}</span>
        </li>
    </ul>
</div>

<div class="table-list-info">
    <div class="text-title">
        使用帮助
    </div>

    <ul class="list-group table-li">
        <li class="list-group-item">
            <span class="list-group-item-name">官方交流网站：</span>
            <span class="list-group-item-text">https://www.xinyouyi.com</span>
        </li>
        <li class="list-group-item">
            <span class="list-group-item-name">官方交流QQ群：</span>
            <span class="list-group-item-text">345624137</span>
        </li>
    </ul>
</div>
@endsection