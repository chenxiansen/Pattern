<?php
namespace Mapping_mode;
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 2019/6/17
 * Time: 11:42
 */
class Mysqli implements AdapterDatabase
{
    protected $conn;
    public function connect($host,$user,$passwd,$dbname)
    {
        $conn = mysqli_connect($host,$user,$passwd);
        mysqli_connect($dbname,$conn);
        return $this->conn = $conn;
    }

    public function query($sql)
    {
        $res = mysqli_query($this->conn,$sql);
        return $res;
    }

    public function close()
    {
        mysql_close($this->conn);
    }
}