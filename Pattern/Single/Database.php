<?php
namespace Pattern\Single;
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 2019/6/17
 * Time: 10:48
 */
class Database
{
    static protected $instance;
    //私有构造函数
    private function __construct(){}

    private function __clone(){}

    //获取实例
    static function getInstance()
    {
        if(!isset(self::$instance))
        {
            self::$instance = new self();
        }
        return self::$instance;
    }
}