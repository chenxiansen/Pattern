<?php
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 2019/6/17
 * Time: 13:11
 */

namespace Pattern\Observer;


abstract class EventGenerator
{
    private $observers = array();
    //添加事件
    function addObserver(Observer $observer)
    {
        $this->observers[] = $observer;
    }
    //触发事件
    function notify()
    {
        foreach ($this->observers  as $observer)
        {
            $observer->update();
        }
    }
}