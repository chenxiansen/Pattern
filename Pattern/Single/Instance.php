<?php
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 2019/6/17
 * Time: 10:49
 */

namespace Single;

//单例模式
class Instance
{
    public function getInstanceDatabase()
    {
        $instance = Database::getInstance();
    }
}