<?php
namespace Iterator;
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 2019/6/17
 * Time: 10:31
 */
//工厂模式
class Factory
{
    static function getInstanceDatabase()
    {
        return new Database();
    }

    static function getUser($id = "")
    {

    }
}