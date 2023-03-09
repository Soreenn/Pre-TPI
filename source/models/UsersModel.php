<?php

namespace models;

class UsersModel
{
    public static function getAllUsers(){
        $raw = Db::QuerySelect('SELECT * FROM users');
        return $raw;
    }

    public static function getSpecificUserByEmail($email){
        $strSeparator = '\'';
        $raw = Db::QuerySelect('SELECT * FROM users WHERE email = ' . $strSeparator . $email . $strSeparator);
        return $raw;
    }
}

?>