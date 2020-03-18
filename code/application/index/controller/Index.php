<?php

namespace app\index\controller;
use think\Controller;
use app\index\model\User;

class Index extends Controller
{
    public function index()
    {
        $data = ['name' => '莫泞衡', 'password' => '184578'];
        return User::createUser($data);
    }

    public function login()
    {
        $name = input('get.name', '');
        if(true !== ($result = $this->validate(['name' => $name],'app\index\validate\Index'))){
            dump($result);die;
        }
        return '恭喜你，注册审核通过';
    }
}
