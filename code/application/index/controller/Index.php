<?php

namespace app\index\controller;

use app\index\model\User;

class Index
{
    public function index()
    {
        $data = ['name' => '莫泞衡', 'password' => '184578'];
        return User::createUser($data);
    }

    public function login()
    {
        $name = input('get.user_name', '');
        $age = input('get.user_age', 0);
        if (empty($name)) {
            return '不存在该用户';
        }
        var_dump($name);die;
    }
}
