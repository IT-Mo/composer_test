<?php
namespace app\index\controller;
use app\index\model\StoreOrder;
class Index
{
    public function index()
    {
        return StoreOrder::getStoreOrder();
    }
}
$obj = new Index();
print_r($obj->index());
