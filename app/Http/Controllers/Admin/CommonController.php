<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class CommonController extends Controller
{
    //
//    上传图片
    public function upload()
    {
       $file=Input::file('file');
        if ($file->isValid()){//检验上传文件是否有效
            $clientName=$file->getClientOriginalName();//获取文件原名称
            $realPath=$file->getRealPath();//这个表示的是缓存在tmp文件夹下的文件的绝对路径
            $entension=$file->getClientOriginalExtension();//获取原始文件的后缀（必选）

            $newName=date('YmdHis').mt_rand(100,999).'.'.$entension;

            $path=$file->move(base_path().'/uploads',$newName);//移动文件路径并重新命名

            $filepath='uploads/'.$newName;
            return $filepath;
        }
    }

}
