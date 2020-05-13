<?php
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 2019/6/17
 * Time: 11:02
 */

namespace Register;


class Register
{
    protected static $objects;
    //设置全局注册
    static public function set($alias,$instance)
    {
        self::$objects[$alias] = $instance;
    }
    //卸载实例
    static public function _unset($alias)
    {
        unset(self::$objects[$alias]);
    }
    //获取实例
    static function getInstance($alias)
    {
        return self::$objects[$alias];
    }

}