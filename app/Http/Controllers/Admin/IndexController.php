<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\User;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class IndexController extends CommonController
{
    //
    public function index()
    {
        return view('admin.index');
    }

    public function info()
    {
        return view('admin.info');
    }

//    修改后台密码
    public function pass()
    {
        if($input=Input::all()){
            $rule=[
                'password'=>'required|between:6,20|confirmed',
            ];

            $msg=[
                'password.required'=>'密码必填项！',
                'password.between'=>'密码输入6-20位之间！',
                'password.confirmed'=>'新密码与确认密码不一致！',
            ];
            $validator=Validator::make($input,$rule,$msg);
            if($validator->passes()){
                $user=User::first();
                $_password=Crypt::decrypt($user->user_pass);

                if($_password==$input['password_o']){
                    $user->user_pass=Crypt::encrypt($input['password']);
                    $user->update();
                    return redirect('admin/info');
                }else{
                    return back()->with('errors','原密码输入错误!');
                }

            }else{
                return back()->withErrors($validator);
            }

        }else{
            return view('admin.pass');
        }

    }
}
