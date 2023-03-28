<?php

namespace controllers;

use models\UsersModel;

class StudentController
{
    public static function show()
    {
        $raw = UsersModel::getAllStudents();
        require "./views/studentList.php";
    }
}
