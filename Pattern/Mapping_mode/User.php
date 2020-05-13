<?php
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 2019/6/17
 * Time: 12:40
 */

namespace Mapping_mode;


class User
{
    public $id;
    public $name;
    public $mobile;
    public $regtime;
    protected $db;
    //构造函数获取数据
    function __construct($id)
    {
        $this->db = new Mysqli();
        $this->db->connect('127.0.0.1','root','12346','test');
        $res = $this->db->query("select * from user limit 1");
        $data = $res->fetch_assoc();
        $this->id = $data["id"];
        $this->name = $data["name"];
        $this->mobile = $data["mobile"];
        $this->regtime = $data["regtime"];

    }
    //析构方法存入数据库
    function __destruct()
    {
        $this->db->query("update user set name={$this->name} mobile={$this->mobile} regtime={$this->regtime} where id = {$this->id} limit 1");
    }
}