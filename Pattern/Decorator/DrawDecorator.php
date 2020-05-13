<?php
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 2019/6/17
 * Time: 14:44
 */

namespace Decorator;


interface DrawDecorator
{
    function beforeDraw();
    function afterDraw();
}