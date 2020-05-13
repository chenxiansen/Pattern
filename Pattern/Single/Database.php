<?php
namespace Single;
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 2019/6/17
 * Time: 10:48
 */
class Database
{
    protected $instance;
    //私有构造函数
    private function __construct()
    {}

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