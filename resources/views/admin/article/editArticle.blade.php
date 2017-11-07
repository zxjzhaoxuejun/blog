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
                    <link rel="stylesheet" type="text/css" href="{{ asset('uploadify/css/webuploader.css')}}" />
            <div id="uploader" class="wu-example">
                <div class="btns-check">
                    <input id="art_thumb" type="text" name="art_thumb" value="" class="form-control pic-input" readonly placeholder="请选择上传图">
                    <div id="picker" class="webuploader-container" >
                        <div class="webuploader-pick">选择文件</div>
                    </div>
                    <!-- <a id="ctlBtn" class="btn btn-default" >开始上传</a> -->
                </div>
                <!--用来存放文件信息-->
                <div id="thelist" class="uploader-list"></div>
                <img src=""  id="thumb_art_img" style="max-width: 180px;max-height: 120px;">
            </div>
            <script type="text/javascript" src="{{ asset('uploadify/script/webuploader.js')}}"></script>
            <script type="text/javascript">
                // 图片上传demo
                // 文件上传
                $(function() {
                    var $ = jQuery,
                        $list = $('#thelist'),
                        $btn = $('#ctlBtn'),
                        state = 'pending',
                        uploader;
                    var thumbnailWidth=50;
                    var thumbnailHeight=50;

                    uploader = WebUploader.create({
                        // 选完文件后，是否自动上传。
                       auto: true,

                        // 不压缩image
                        resize: false,
                        // swf文件路径
                        swf: "{{ asset('uploadify/script/Uploader.swf')}}",
                        // 文件接收服务端。
                        server: "{{url('student/upload')}}",
                        // 选择文件的按钮。可选。
                        // 内部根据当前运行是创建，可能是input元素，也可能是flash.
                        pick: '#picker',
                        formData:{
                            "_token":'{{csrf_token()}}'
                      },
                        // 只允许选择图片文件。
                        accept: {
                            title: 'Images',
                            extensions: 'gif,jpg,jpeg,bmp,png',
                            mimeTypes: 'image/*'
                        },
//                        
                    });

                    // 当有文件添加进来的时候

                    uploader.on( 'fileQueued', function( file ) {
                        $('.up-name-pic').remove();
                        $list.append( '<div id="' + file.id + '" class="item up-name-pic">' +
                            '<span class="info">' + file.name + '</span>' +
                            '<span class="state">等待上传...</span>' +
                            '</div>' );
                    });
            
                    // 文件上传过程中创建进度条实时显示。
                    uploader.on( 'uploadProgress', function( file, percentage ) {
                        var $li = $( '#'+file.id ),
                            $percent = $li.find('.progress .progress-bar');

                        // 避免重复创建
                        if ( !$percent.length ) {
                            $percent = $('<div class="progress progress-striped active">' +
                                '<div class="progress-bar" role="progressbar" style="width: 0%">' +
                                '</div>' +
                                '</div>').appendTo( $li ).find('.progress-bar');
                        }

                        $li.find('span.state').text('上传中');

                        $percent.css( 'width', percentage * 100 + '%' );
                    });

                    uploader.on( 'uploadSuccess', function( file,response) {//file {File}File对象//•response {Object}服务端返回的数据
                        console.log(response);
                        $('#art_thumb').val(response._raw);
                        $('#thumb_art_img').attr('src','/inputForm/'+response._raw);
                        $('.up-name-pic').remove();
//                        $( '#'+file.id ).find('span.state').text('已上传');
                    });

                    uploader.on( 'uploadError', function( file ) {
                        $( '#'+file.id ).find('span.state').text('上传出错');
                    });

                    uploader.on( 'uploadComplete', function( file ) {
                        $( '#'+file.id ).find('.progress').fadeOut();
                    });

                    uploader.on( 'all', function( type ) {
                        if ( type === 'startUpload' ) {
                            state = 'uploading';
                        } else if ( type === 'stopUpload' ) {
                            state = 'paused';
                        } else if ( type === 'uploadFinished' ) {
                            state = 'done';
                        }

                        if ( state === 'uploading' ) {
                            $btn.text('暂停上传');
                        } else {
                            $btn.text('开始上传');
                        }
                    });

                    $btn.on( 'click', function() {
                        if ( state === 'uploading' ) {
                            uploader.stop();
                        } else {
                            uploader.upload();
                        }
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