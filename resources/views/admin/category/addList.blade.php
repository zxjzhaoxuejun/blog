@extends('layouts.admin')

@section('content')
    <div class="right-heade-nav">
        <span class="glyphicon glyphicon-home"></span>
        <a href="{{url('admin/info')}}" class="navbar-link">首页</a>
        &raquo;
        <a href="#" class="navbar-link">添加分类</a>
    </div>

    <div class="kj-mode">
        <div class="text-title">
            分类管理
        </div>
        <div class="qk-nav">
            <a class="navbar-link" href="{{url('admin/category/create')}}">
                <span class="glyphicon glyphicon-plus"></span>
                添加分类
            </a>
            <a class="navbar-link" href="{{url('admin/category')}}">
                <span class="glyphicon glyphicon-text-background"></span>
                全部分类
            </a>
        </div>
    </div>

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

    <form action="{{url('admin/category')}}" method="post">
        {{csrf_field()}}
        <table class="table table-bordered type-table">
            <tr>
                <td width="15%" style="text-align: right"><span style="color: red;margin-right: 6px;vertical-align: middle">*</span>父级分类</td>
                <td>
                    <select name="cate_pid">
                        <option value="0">==顶级分类==</option>
                        @foreach($data as $d)
                            <option value="{{$d->cate_id}}">{{$d->cate_name}}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td width="15%" style="text-align: right"><span style="color: red;margin-right: 6px;vertical-align: middle">*</span>分类名称</td>
                <td>
                    <input type="text" class="form-control" name="cate_name"  placeholder="请输入分类名称" style="width: 30%;display: inline-block">
                    <span class="glyphicon glyphicon-info-sign" style="color: red;margin-left: 6px"><i style="color: #323232;font-style: normal">名称可以写入20个字</i></span>
                </td>
            </tr>
            <tr>
                <td width="15%" style="text-align: right"><span style="color: red;margin-right: 6px;vertical-align: middle">*</span>分类标题</td>
                <td>
                    <input type="text" class="form-control" name="cate_title"  placeholder="请输入分类标题" style="width: 60%;display: inline-block">
                    <span class="glyphicon glyphicon-info-sign" style="color: red;margin-left: 6px"><i style="color: #323232;font-style: normal">标题可以写入30个字</i></span>
                </td>
            </tr>
            <tr>
                <td width="15%" style="text-align: right">关键词</td>
                <td>
                    <div class="form-group">
                        <textarea class="form-control" rows="3" name="cate_keywords"  placeholder="请输入关键词" style="width: 60%;display: inline-block"></textarea>
                    </div>
                </td>
            </tr>
            <tr>
                <td width="15%" style="text-align: right">描述</td>
                <td>
                    <div class="form-group">
                        <textarea class="form-control" rows="3" name="cate_description"  placeholder="请输入描述" style="width: 60%;display: inline-block"></textarea>
                    </div>
                </td>
            </tr>
            <tr>
                <td width="15%" style="text-align: right"><span style="color: red;margin-right: 6px;vertical-align: middle">*</span>排序</td>
                <td>
                    <input type="number" class="form-control" name="cate_order"  placeholder="请输入排序" style="width: 15%;display: inline-block">
                    <span class="glyphicon glyphicon-info-sign" style="color: red;margin-left: 6px"><i style="color: #323232;font-style: normal">只能输入数字</i></span>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center">
                    <button type="submit" class="btn btn-primary" style="margin-right: 20px">提交</button>
                    <a class="btn btn-default">返回</a>
                </td>

            </tr>
        </table>

    </form>

@endsection