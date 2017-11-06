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
       $file=Input::file('Filedata');
       dd($file);
    }

}
