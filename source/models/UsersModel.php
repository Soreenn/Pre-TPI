<?php

namespace models;

class UsersModel
{
    public static function getAllUsers(){
        $raw = Db::QuerySelect('SELECT * FROM users');
        return $raw;
    }

    public static function getAllStudents(){
        $strSeparator = '\'';
        $raw = Db::QuerySelect('SELECT * FROM users WHERE teacher = false');
        return $raw;
    }

    public static function getSpecificUserByEmail($email){
        $strSeparator = '\'';
        $raw = Db::QuerySelect('SELECT * FROM users WHERE email = ' . $strSeparator . $email . $strSeparator);
        return $raw;
    }

    public static function addUser($lastname, $firstname, $email, $birthdate, $password, $firstconnexion, $teacher){
        $result = Db::QuerySelect("INSERT INTO users (lastname, firstname, email, birthdate, password, firstconnexion, teacher) VALUES ('$lastname', '$firstname', '$email', '$birthdate', '$password', '$firstconnexion', '$teacher')");
        return $result;
    }
}

?>