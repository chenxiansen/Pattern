<?php
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 2019/6/17
 * Time: 12:05
 */

namespace Pattern\Strategy;


class FemaleuserStrategy implements userStrategy
{
    function showAdd()
    {
        echo "2014新款女装";
        // TODO: Implement showAdd() method.
    }

    function showCategory()
    {
        echo "女装";
        // TODO: Implement showCategory() method.
    }
}