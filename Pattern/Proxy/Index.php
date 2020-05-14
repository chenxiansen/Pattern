<?php
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 2019/6/17
 * Time: 15:37
 */

namespace Pattern\Proxy;

//代理模式常用于数据库的主从，读写分离
class Index
{

}
//从读
$db = Factory::getInstanceDatabase('slave');
$info = $db->query("select name from user where id = 1 limit 1");
//主写
$db1 = Factory::getInstanceDatabase('master');
$db1->query("update user name='lili' where id = 1 limit 1");


//代理模式写法,不需要关心数据库的读写是在哪个库上，一切都由代理给生成
$proxy = new Proxy();
$proxy->getUserName('1');
$proxy->setUserName('1','chenxiansen');

