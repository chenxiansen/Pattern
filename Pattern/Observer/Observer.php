<?php
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 2019/6/17
 * Time: 13:13
 */

namespace Pattern\Observer;

//观察者模式，先定义一个观察者
interface Observer
{
    public function notify($obj);
}