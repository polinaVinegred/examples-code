<?php
require_once 'MySQLRoutines.php';

class JsonRoutines
{
    public function VariableEncode($var)
    {
        return json_encode($var);
    }

    public function JsonOutput($query)
    {
        $json = JsonRoutines::VariableEncode(MySQLRoutines::DBQueryTransformation(MySQLRoutines::DBQuery($query)));
        return $json;

    }
}
