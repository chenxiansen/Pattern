<?php
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 2019/6/17
 * Time: 15:40
 */

namespace Pattern\Proxy;


class Proxy implements IUserProxy
{
    function getUserName($id)
    {
        $db = Factory::getDatabase('slave');
        $db->query("select name from user where id = $id limit 1");
    }

    function setUserName($id, $name)
    {
        $db = Factory::getDatabase('master');
        $db->query("update user set name = $name where id = $id limit 1");
    }
}