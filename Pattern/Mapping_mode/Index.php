<?php
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 2019/6/17
 * Time: 12:42
 */

namespace Mapping_mode;

//数据对象映射模式
class Index
{
    public function index()
    {
        $user = new User(1);
        //读取数据
        var_dump($user->name,$user->id,$user->mobile,$user->regtime);

        //数据写入 在user析构的时候存入
        $user->mobile = "15951982354";
        $user->name = "chenxiansen";
        $user->regtime = date();

    }
}