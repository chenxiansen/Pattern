<?php
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 2019/6/17
 * Time: 11:01
 */

namespace Register;


class Database
{
    protected $object;
    private function __construct()
    {}

    static function getInstance()
    {
        if(!isset(self::$object ))
        {
            self::$object = new self();
            //添加到注册器
            Register::set(self::class,self::$object);
        }
        return Register::getInstance(self::class);
    }
}