@extends('layouts.admin')
@section('content')
    <div class="right-heade-nav">
        <span class="glyphicon glyphicon-home"></span>
        <a href="{{url('admin/info')}}" class="navbar-link">首页</a>
        &gt;
        <a href="#" class="navbar-link">全部文章</a>
    </div>

    <div class="kj-mode">
        <div class="text-title">
            文章管理
        </div>
        <div class="qk-nav">
            <a class="navbar-link" href="{{url('admin/article/create')}}">
                <span class="glyphicon glyphicon-plus"></span>
                添加文章
            </a>
            <a class="navbar-link" href="{{url('admin/article')}}">
                <span class="glyphicon glyphicon-text-background"></span>
                全部文章列
            </a>
        </div>
    </div>

    <table class="table table-bordered type-table">
        <thead>
        <tr style="background:#fafafa">
            <th width="5%" style="text-align: center">ID</th>
            <th>标题</th>
            <th>点击次数</th>
            <th>编辑者</th>
            <th>关键词</th>
            <th>发布时间</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $v)
            <tr>
                <td style="text-align: center">
                    {{$v->art_id}}
                </td>
                <td>
                    <a href="#">{{$v->art_title}}</a>
                </td>
                <td>
                    {{$v->art_view}}
                </td>
                <td>
                    {{$v->art_editor}}
                </td>
                <td>
                    {{$v->art_tag}}
                </td>
                <td>
                    {{date('Y-m-d',$v->art_time)}}
                </td>
                <td>
                    <a href="javascript:;" onclick="delcate({{$v->art_id}})">删除</a>
                    <a href="{{url('admin/article/'.$v->art_id.'/edit')}}">修改</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="page_list" style="text-align: center">
        {{$data->links()}}
    </div>

    <script>

    </script>

@endsection