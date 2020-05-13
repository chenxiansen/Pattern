<?php
namespace Adapter;
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 2019/6/17
 * Time: 11:43
 */
interface AdapterDatabase
{
    //连接接口
    function connect($host,$user,$passwd,$dbname);
    //查询接口
    function query($sql);
    //关闭接口
    function close();

}