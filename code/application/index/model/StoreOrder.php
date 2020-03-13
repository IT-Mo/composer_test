<?php

namespace app\index\model;
use think\Model;
class StoreOrder extends Model
{
    public static function getStoreOrder(){
        return self::all();
    }
}