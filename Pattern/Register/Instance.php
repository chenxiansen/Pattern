<?php
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 2019/6/17
 * Time: 11:02
 */

namespace Pattern\Register;


class Instance
{
    public function getInstanceDatabase()
    {
        //获取Database实力
        Database::getInstance(Database::class);
    }

}