<?php
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 2019/6/17
 * Time: 11:51
 */

namespace Adapter;


class Instance
{
    public function queryDatabase()
    {
        $db = new Mysql();
        $db->connect('127.0.0.1','root','12346','test');
        $db->query("show databases");
        $db->close();

        $db = new Mysqli();
        $db->connect('127.0.0.1','root','12346','test');
        $db->query("show databases");
        $db->close();

        $db = new \PDO();
        $db->connect('127.0.0.1','root','12346','test');
        $db->query("show databases");
        $db->close();
    }
}