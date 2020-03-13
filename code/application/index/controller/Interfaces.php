<?php

namespace app\index\controller;

class Interfaces
{
    public static function json($code, $message, $data)
    {
        $result = [
            "code" => $code,
            "message" => $message,
            "data" => $data
        ];
        return json_encode($result);
    }
}