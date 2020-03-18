<?php
namespace app\index\validate;
use think\Validate;

class Base extends Validate{
    protected $regex = [
        'require' => '/.+/',
        'zip' => '/^[1-9]\d{5}$/',
    ];

}