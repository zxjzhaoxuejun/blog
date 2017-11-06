@extends('layouts.admin')
@section('content')
    <div class="right-heade-nav">
        <span class="glyphicon glyphicon-home"></span>
        <a href="{{url('admin/info')}}" class="navbar-link">首页</a>
        &gt;
        <a href="#" class="navbar-link">全部分类</a>
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

    <table class="table table-bordered type-table">
        <thead>
        <tr style="background:#fafafa">
            <th width="5%">排序</th>
            <th width="5%">ID</th>
            <th>分类名称</th>
            <th>标题</th>
            <th>查看次数</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $v)
            <tr>
                <td>
                    <input class="table-input" onchange="changeOrder(this,{{$v->cate_id}})" type="text" value="{{$v->cate_order}}">
                </td>
                <td>
                    {{$v->cate_id}}
                </td>
                <td>
                    <a href="#">{{$v->_cate_name}}</a>
                </td>
                <td>
                   {{$v->cate_title}}
                </td>
                <td>
                    {{$v->cate_view}}
                </td>
                <td>
                    <a href="javascript:;" onclick="delcate({{$v->cate_id}})">删除</a>
                    <a href="{{url('admin/category/'.$v->cate_id.'/edit')}}">修改</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <script>
        function changeOrder(obj,cate_id) {
            var cate_order=$(obj).val();
            $.post('{{url('admin/cate/changeorder')}}',{'_token':'{{csrf_token()}}','cate_order':cate_order,'cate_id':cate_id},function (data) {
                if(data.statue==0){
                    layer.alert(data.msg, {icon: 6});
                }else{
                    layer.alert(data.msg, {icon: 5});
                }
            })
        }

        function delcate(cate_id) {
            layer.confirm('您确定要删除这个分类？',{
                btn:['确定','取消']
            },function () {
                $.post('{{url('admin/category/')}}/'+cate_id,{'_token':'{{csrf_token()}}','_method':'delete'},function (data) {
                    if(data.statue==0){
                        layer.alert(data.msg, {icon: 6});
                        location.href=location.href;
                    }else{
                        layer.alert(data.msg, {icon: 5});
                    }
                })
            })


        }
    </script>

@endsection