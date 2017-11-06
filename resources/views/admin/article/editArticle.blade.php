@extends('layouts.admin')

@section('content')
    <div class="right-heade-nav">
        <span class="glyphicon glyphicon-home"></span>
        <a href="{{url('admin/info')}}" class="navbar-link">首页</a>
        &raquo;
        <a href="#" class="navbar-link">修改文章</a>
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

    <form action="{{url('admin/article/'.$filed->art_id)}}" method="post">
        <input type="hidden" value="put" name="_method">
        {{csrf_field()}}
        <table class="table table-bordered type-table">
            <tr>
                <td width="15%" style="text-align: right"><span style="color: red;margin-right: 6px;vertical-align: middle">*</span>父级分类</td>
                <td>
                    <select name="cate_id">
                        @foreach($data as $d)
                            <option value="{{$d->cate_id}}"
                            @if($filed->cate_id==$d->cate_id) selected @endif
                            >{{$d->_cate_name}}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td width="15%" style="text-align: right"><span style="color: red;margin-right: 6px;vertical-align: middle">*</span>文章标题</td>
                <td>
                    <input type="text" class="form-control" name="art_title" value="{{$filed->art_title}}"  placeholder="请输入文章标题" style="width: 50%;display: inline-block">
                    <span class="glyphicon glyphicon-info-sign" style="color: red;margin-left: 6px"><i style="color: #323232;font-style: normal">名称可以写入50个字</i></span>
                    {{$errors->first('art_title')}}
                </td>
            </tr>
            <tr>
                <td width="15%" style="text-align: right"><span style="color: red;margin-right: 6px;vertical-align: middle">*</span>编辑</td>
                <td>
                    <input type="text" class="form-control" name="art_editor"  value="{{$filed->art_editor}}"  placeholder="请输入编辑名" style="width: 15%;display: inline-block">
                </td>
            </tr>

            <tr>
                <td width="15%" style="text-align: right">缩略图</td>
                <td>
                    {{--<input type="text" class="form-control" name=art_thumb"  style="width: 15%;display: inline-block">--}}
                    <input id="file_upload"  name="art_thumb"  value="{{$filed->art_thumb}}"  style="display: inline-block" type="file" multiple="true">
                    <script src="{{asset('uploadify/jquery.uploadify.js')}}" type="text/javascript"></script>
                    <link rel="stylesheet" type="text/css" href="{{asset('uploadify/uploadify.css')}}">
                    <script type="text/javascript">
                        <?php $timestamp = time();?>
                        $(function() {
                            $('#file_upload').uploadify({
                                     'formData': {
                                    'timestamp': '<?php echo $timestamp;?>',
                                    '_token': '{{csrf_token()}}'
                                },
                                'swf':'{{url('uploadify/uploadify.swf')}}' ,
                                'uploader':'{{url('admin/upload')}}',
                            });
                        });
                    </script>
                </td>
            </tr>
            <tr>
                <td width="15%" style="text-align: right">关键词</td>
                <td>
                    <input type="text" class="form-control" name="art_tag" value="{{$filed->art_tag}}"  placeholder="请输入关键词" style="width: 50%;display: inline-block">
                </td>
            </tr>
            <tr>
                <td width="15%" style="text-align: right">描述</td>
                <td>
                    <div class="form-group">
                        <textarea class="form-control" rows="3" name="art_description"  placeholder="请输入描述" style="width: 60%;display: inline-block">{{$filed->art_description}}</textarea>
                    </div>
                </td>
            </tr>
            <tr>
                <td width="15%" style="text-align: right"><span style="color: red;margin-right: 6px;vertical-align: middle">*</span>文章内容</td>
                <td>
                    <script type="text/javascript" charset="utf-8" src="{{asset('ueditor/ueditor.config.js')}}"></script>
                    <script type="text/javascript" charset="utf-8" src="{{asset('ueditor/ueditor.all.min.js')}}"> </script>
                    <script type="text/javascript" charset="utf-8" src="{{asset('ueditor/lang/zh-cn/zh-cn.js')}}"></script>
                    <script id="editor" name="art_content"  type="text/plain" style="width:800px;height:400px;">{!! $filed->art_content !!}</script>
                    <script type="text/javascript">
                        //实例化编辑器
                        var ue = UE.getEditor('editor');
                    </script>


                        </td>
            </tr>

            <tr>
                <td colspan="2" style="text-align: center">
                    <button type="submit" class="btn btn-primary" style="margin-right: 20px">修改</button>
                    <a class="btn btn-default">返回</a>
                </td>

            </tr>
        </table>

    </form>

@endsection