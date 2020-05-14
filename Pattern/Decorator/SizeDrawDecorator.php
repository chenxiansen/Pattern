<?php
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 2019/6/17
 * Time: 14:57
 */

namespace Pattern\Decorator;


class SizeDrawDecorator implements DrawDecorator
{
    protected $size;

    function __construct($size = "15px")
    {
        $this->size = $size;
    }

    function beforeDraw()
    {
        echo "<div style='font-size:{$this->size};'>";
    }

    function afterDraw()
    {
        // TODO: Implement afterDraw() method.
    }
}