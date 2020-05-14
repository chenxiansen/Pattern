<?php
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 2019/6/17
 * Time: 15:04
 */

namespace Pattern\Iterator;

//迭代器模式
class Index
{

}

$users = new AllUser();
foreach ($users as $user)
{
    var_dump($user);
}