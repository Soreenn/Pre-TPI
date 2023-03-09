<?php

namespace models;

use PDO;
use PDOException;

class Db
{
    private static function _connection()
    {
        $tempDbConnexion = null;

        $sqlDriver = 'mysql';
        $hostname = 'localhost';
        $port = 3306;
        $charset = 'utf8';
        $dbName = 'tpi';
        $userName = 'tpi';
        $userPwd = '';
        $dsn = $sqlDriver . ':host=' . $hostname . ';dbname=' . $dbName . ';port=' . $port . ';charset=' . $charset;

        try {
            $tempDbConnexion = new PDO($dsn, $userName, $userPwd);
        } catch (PDOException $exception) {
            echo 'Connection failed: ' . $exception->getMessage();
        }
        return $tempDbConnexion;
    }

    public static function QuerySelect($query)
    {
            $queryResult = null;

            $dbConnexion = db::_connection(); //open database connexion
            if ($dbConnexion != null) {
                $statement = $dbConnexion->prepare($query); //prepare query
                $statement->execute(); //execute query
                $queryResult = $statement->fetchAll(); //prepare result for client
            }
            $dbConnexion = null; //close database connexion
            return $queryResult;
    }
}
