<?php
namespace Pattern\Mapping_mode;
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 2019/6/17
 * Time: 11:42
 */
class Mysql implements AdapterDatabase
{
    protected $conn;
    public function connect($host,$user,$passwd,$dbname)
    {
        $conn = mysql_connect($host,$user,$passwd);
        mysql_connect($dbname,$conn);
        return $this->conn = $conn;
    }

    public function query($sql)
    {
        $res = mysql_query($sql,$this->conn);
        return $res;
    }

    public function close()
    {
        mysql_close($this->conn);
    }
}