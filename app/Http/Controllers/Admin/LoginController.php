<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Input;

require_once '../resources/org/code/Code.class.php';

class LoginController extends CommonController
{
    //登录页
    public function login()
    {
        if($input=Input::all()){
            $_code=$_SESSION['captcha_code'];
            if(strtoupper($input['code'])!=$_code){
                return back()->with('error','验证码错误');
            }
            $_usr=User::first();
            if($input['user_name']!=$_usr->user_name||$input['user_pass']!=Crypt::decrypt($_usr->user_pass)){
                return back()->with('error','用户名或密码错误！');
            }

//            登录成功后保留用户信息
            session(['usr'=>$_usr]);
            return redirect('admin/index');
        }else{
            return view('admin.login');
        }

    }
    
//    验证码
    public function code()
    {
        $image=new \Captcha();
        $image->config(80,25,4,'captcha_code');
        $image->create();//这样就会向浏览器输出一张图片
    }

//    获取验证码
    public function getCode()
    {
        echo $_SESSION['captcha_code'];
    }

//    加密
    public function crypt()
    {
        $str='123456';

        $str_p='eyJpdiI6IlQ0XC94VnRSblBEWGJmRExYcHhaaG9nPT0iLCJ2YWx1ZSI6IkdYc2VlNjNIRHJ5UzFra1pGT2xySGc9PSIsIm1hYyI6ImViYTAzZGQ2NzE2MTkzNDI2NzcwNzEyNzRhMzRiN2Y5NzU0MGNmZTJiMWM5OTMzOGFlYTAyYjM3MTAwNjliZGQifQ==';
        echo Crypt::encrypt($str);//加密
        echo '<br>';
//        解密
        echo Crypt::decrypt($str_p);
    }


//    退出
    public function quit()
    {
        session(['usr'=>null]);
        return redirect('admin/login');
    }



}
