<?php
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 2019/6/17
 * Time: 13:13
 */

namespace Observer;


interface Observer
{
    function update($event_info = null);
}