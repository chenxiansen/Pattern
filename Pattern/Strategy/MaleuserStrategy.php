<?php
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 2019/6/17
 * Time: 12:05
 */

namespace Pattern\Strategy;


class MaleuserStrategy implements userStrategy
{
    function showAdd()
    {
        echo "2014新款男装";
        // TODO: Implement showAdd() method.
    }

    function showCategory()
    {
        echo "男装";
        // TODO: Implement showCategory() method.
    }
}