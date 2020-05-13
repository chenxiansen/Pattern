<?php
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 2019/6/17
 * Time: 14:41
 */

namespace Decorator;


class Canvas1 extends Canvas
{
    function draw()
    {
        //添加自己的功能
        echo "<div style='color: red'>";
        parent::draw(); // TODO: Change the autogenerated stub
        echo "</div>";
    }

}