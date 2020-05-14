<?php
namespace Pattern\Observer;
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 2019/6/17
 * Time: 13:09
 */
class Event extends EventGenerator
{
    //触发事件
    function trigger()
    {
        echo "Event<br/>";
        $this->notify();
    }
}
class Observer1 implements Observer
{
    function update($event_info = null)
    {
        echo "逻辑1";
        // TODO: Implement update() method.
    }
}
class Observer2 implements Observer
{
    function update($event_info = null)
    {
        echo "逻辑2";
        // TODO: Implement update() method.
    }
}
$event = new Event();
//逻辑一
$event->addObserver(new Observer1());
//逻辑二
$event->addObserver(new Observer2());
//触发
$event->trigger();