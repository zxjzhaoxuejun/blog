<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Article;
use App\Http\Model\Category;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;


class ArticleController extends CommonController
{
    ////get,admin/article 全部文章列表
    public function index()
    {
        $data=Article::orderBy('art_time','desc')->paginate(2);
        return view('admin.article.index',compact('data'));
    }

    //get,admin/article/create  添加文章
    public function create()
    {
        $data=(new Category())->tree();
        return view('admin.article.addArticle',compact('data'));
    }

    //post,admin/article  添加文章提交
    public function store()
    {
        $input=Input::except('_token');
        $input['art_time']=time();

        $rule=[
            'art_title'=>'required|max:50',
            'art_content'=>'required',
            'art_editor'=>'required|max:20',
        ];
        $msg=[
            'art_title.required'=>'文章标题必填！',
            'art_title.max'=>'文章标题输入不能超过50位！',
            'art_content.required'=>'文章内容必填！',
            'art_editor.required'=>'编辑者必填！',
            'art_editor.max'=>'编辑者名输入不能超过20位！',
        ];
        $validator=Validator::make($input,$rule,$msg);
        if($validator->passes()){
            $re=Article::create($input);
            if($re){
                return redirect('admin/article');
            }else{
                return back()->with('errors','数据提交失败!');
            }
        }else{
            return back()->withErrors($validator)->withInput();
        }
    }

    //get,admin/article/{category}/edit 编辑分类
    public function edit($art_id)
    {
        $filed=Article::find($art_id);
        $data=(new Category())->tree();
        return view('admin.article.editArticle',compact('data','filed'));
    }

    //put,admin/article/{article} 更新文章
    public function update($art_id)
    {
        $input=Input::except('_token','_method');
        $input['art_time']=time();
        $rule=[
            'art_title'=>'required|max:50',
            'art_content'=>'required',
            'art_editor'=>'required|max:20',
        ];
        $msg=[
            'art_title.required'=>'文章标题必填！',
            'art_title.max'=>'文章标题输入不能超过50位！',
            'art_content.required'=>'文章内容必填！',
            'art_editor.required'=>'编辑者必填！',
            'art_editor.max'=>'编辑者名输入不能超过20位！',
        ];
        $validator=Validator::make($input,$rule,$msg);
        if($validator->passes()){
            $re=Article::where('art_id',$art_id)->update($input);
            if($re){
                return redirect('admin/article');
            }else{
                return back()->with('errors','修改修改失败!');
            }
        }else{
            return back()->withErrors($validator);
        }
    }


}
