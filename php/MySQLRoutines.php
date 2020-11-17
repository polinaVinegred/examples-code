<?php
require_once 'GoodsAPI.php';

class MySQLRoutines
{
    public function DBConection()
    {
        $db = new mysqli('localhost', 'name', 'pssword', 'baseName');
        if (mysqli_connect_errno()) {
            echo "Подключение невозможно: " . mysqli_connect_error();
        }
        return $db;
    }

    public function DBQuery($query)
    {
        $ost = mysqli_query(MySQLRoutines::DBConection(), $query);
        return $ost;
    }

    public function DBQueryTransformation($ost)
    {
        $dbost = array();
        while ($raw_rs = mysqli_fetch_assoc($ost)) {
            $dbost[] = $raw_rs;
        }
        return $dbost;
    }
}
