<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;


class CategoryController extends CommonController
{
    //get,admin/category 全部分类列表
    public function index()
    {
        $data=(new Category())->tree();
        return view('admin.category.index')->with('data',$data);
    }

//修改排序
    public function changeOrder()
    {
        $input=Input::all();
        $data=Category::find($input['cate_id']);
        $data->cate_order=$input['cate_order'];
        $re=$data->update();
        if ($re){
            $statue=[
                'statue'=>0,
                'msg'=>'排序更新成功！'
            ];
        }else{
            $statue=[
                'statue'=>1,
                'msg'=>'排序更新失败！'
            ];
        }

        return $statue;
    }



    //post,admin/category  添加分类提交
    public function store()
    {
       //except()除什么以外，其他的都获取；all()是全部
        $input=Input::except('_token');

        $rule=[
            'cate_name'=>'required|max:20',
            'cate_order'=>'required',
            'cate_title'=>'required|max:30',
        ];
        $msg=[
            'cate_name.required'=>'分类名称必填项！',
            'cate_name.max'=>'分类名称输入不能超过20位！',
            'cate_order.required'=>'排序必填项！',
            'cate_title.required'=>'分类标题必填项！',
            'cate_title.max'=>'分类标题输入不能超过20位！',
        ];
        $validator=Validator::make($input,$rule,$msg);
        if($validator->passes()){
            $re=Category::create($input);
            if($re){
                return redirect('admin/category');
            }else{
                return back()->with('errors','数据提交失败!');
            }
        }else{
            return back()->withErrors($validator);
        }

    }

    //get,admin/category/create  添加分类
    public function create()
    {
        $data=Category::where('cate_pid',0)->get();
        return view('admin.category.addList',compact('data'));
    }

    //get,admin/category/{category} 显示单个分类信息
    public function show()
    {

    }

    //delete,admin/category/{category} 删除单个分类
    public function destroy($cate_id)
    {
       $re=Category::where('cate_id',$cate_id)->delete();
       Category::where('cate_pid',$cate_id)->update(['cate_pid'=>0]);
       if($re){
           $statue=[
               'statue'=>0,
               'msg'=>'删除记录成功！'
           ];
       }else{
           $statue=[
               'statue'=>0,
               'msg'=>'删除记录失败！'
           ];
       }

       return $statue;
    }

    //put,admin/category/{category} 更新分类
    public function update($cate_id)
    {
        $input=Input::except('_token','_method');
        $rule=[
            'cate_name'=>'required|max:20',
            'cate_order'=>'required',
            'cate_title'=>'required|max:30',
        ];
        $msg=[
            'cate_name.required'=>'分类名称必填项！',
            'cate_name.max'=>'分类名称输入不能超过20位！',
            'cate_order.required'=>'排序必填项！',
            'cate_title.required'=>'分类标题必填项！',
            'cate_title.max'=>'分类标题输入不能超过20位！',
        ];
        $validator=Validator::make($input,$rule,$msg);
        if($validator->passes()){
            $re=Category::where('cate_id',$cate_id)->update($input);
            if($re){
                return redirect('admin/category');
            }else{
                return back()->with('errors','数据修改失败!');
            }
        }else{
            return back()->withErrors($validator);
        }
    }

    //get,admin/category/{category}/edit 编辑分类
    public function edit($cate_id)
    {
        $filed=Category::find($cate_id);
        $data=Category::where('cate_pid',0)->get();
        return view('admin.category.edit',compact('data','filed'));
    }


}
