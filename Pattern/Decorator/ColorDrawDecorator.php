<?php
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 2019/6/17
 * Time: 14:51
 */

namespace Decorator;


class ColorDrawDecorator implements DrawDecorator
{
    protected $color;
    function __construct($color = 'red')
    {
        $this->color = $color;
    }

    function beforeDraw()
    {
        echo "<div style='color:{$this->color};'>";
    }

    function afterDraw()
    {

    }

}