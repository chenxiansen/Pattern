<?php
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 2019/6/17
 * Time: 15:04
 */

namespace Iterator;

//需要继承php自带的迭代器类
class AllUser implements \Iterator
{
    protected $ids;
    protected $data = array();
    protected $index;
    function __construct()
    {
        $db = Factory::getInstanceDatabase();
        $result = query("select id from user");
        $this->ids = $result->fetch_all(MYSQLI_ASSOC);
    }

    //第二步
    function current()
    {
        $id = $this->ids[$this->index]['id'];
        Factory::getUser($id);
    }

    //第四步
    function next()
    {
        $this->index ++;
    }

    //第三步，验证有没有下一个
    function valid()
    {
        return $this->index < count($this->ids);
    }

    //第一步，重置迭代器
    function rewind()
    {
        $this->index = 0;
    }

    //第五步，获取当前索引
    function key()
    {
        return $this->index;
    }


}