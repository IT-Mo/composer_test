<?php

namespace app\index\model;
use think\Model;
class User extends Model
{
    // 获取用户数据
    public static function createUser($data){
        if(self::create($data)){
            return '数据增加成功';
        }
    }


}