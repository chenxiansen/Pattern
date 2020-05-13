<?php
namespace Factory;
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 2019/6/17
 * Time: 10:33
 */
//工厂模式
class Instance
{
    public function getDatabase()
    {
        //获取工厂模式句柄
        Factory::getInstanceDatabase();
    }
}