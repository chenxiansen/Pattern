<?php
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 2019/6/17
 * Time: 15:41
 */

namespace Proxy;


interface IUserProxy
{
    function getUserName($id);
    function setUserName($id,$name);
}