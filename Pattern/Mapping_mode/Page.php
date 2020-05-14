<?php
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 2019/6/17
 * Time: 13:00
 */

namespace Pattern\Mapping_mode;


class Page
{
    function index()
    {
        $user = new User(1);
        $user->name = "smater";
        $this->test();
    }

    function test()
    {
        $user = new User(1);
        $user->mobile = '15951265542';
    }
}