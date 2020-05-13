<?php
namespace Adapter;
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 2019/6/17
 * Time: 11:42
 */
class Pdo implements AdapterDatabase
{
    protected $conn;
    public function connect($host,$user,$passwd,$dbname)
    {
        $conn = new \PDO("mysql:host=$host;dbname=$dbname",$user,$passwd);
        return $this->conn = $conn;
    }

    public function query($sql)
    {
        $res = $this->conn->query($sql);
        return $res;
    }

    public function close()
    {
        unset($this->conn);
    }

}