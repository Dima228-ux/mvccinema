<?php


class DbConnector
{
    public static function getConnection(): mysqli
    {
        $mysqli = mysqli_connect("127.0.0.1:3306", "root", "", "cinema");

        $mysqli->set_charset("utf8");

        return $mysqli;
    }
}