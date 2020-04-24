<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'eshop');
define('DB_USER_NAME', 'root');
define('DB_USER_PASSWORD', 'root');

//$dbConnection = new mysqli(DB_HOST, DB_USER_NAME, DB_USER_PASSWORD, DB_NAME);

function connectToDb($host = DB_HOST, $user = DB_USER_NAME, $password = DB_USER_PASSWORD, $dbName = DB_NAME)
{
    static $connection;
    if (null == $connection) {
        $connection = mysqli_connect($host, $user, $password, $dbName);
        if (mysqli_connect_errno()) {
            die("Ошибка " . mysqli_connect_error());
        }
    }
    return $connection;
}
