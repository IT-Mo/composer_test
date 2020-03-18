<?php
namespace app\index\validate;

class Index extends Base{
    protected $rule = [
        'name|客户名' => 'require|checkName',
    ];
    protected $message = [
        'name.require' => '这个是必须要填写的信息哦！',
    ];
    protected function checkName($value){
        if($value == '毛主席') return '涉及敏感词汇，不能注册';
        return true;
    }
}
