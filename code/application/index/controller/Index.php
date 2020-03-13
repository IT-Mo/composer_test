<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
        $code = 100;
        $message = '测试信息提示';
        $data = ["name"=>'小时',"age"=>'编程'];
        return Interfaces::json($code,$message,$data);
    }
}
$obj = new Index();
echo $obj->index();
