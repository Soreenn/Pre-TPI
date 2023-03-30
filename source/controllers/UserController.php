<?php

namespace controllers;

use models\UsersModel;

class UserController
{
    public static function show()
    {
        require "./views/addStudent.php";
    }

    public static function importNewStudents($csvFile)
    {
        $file_name = $_FILES['file']['name'];
        $file_tmp = $_FILES['file']['tmp_name'];
        $extension = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
        if ($extension == 'csv') {
            move_uploaded_file($file_tmp, "views/content/uploads/" . date("d-m-y-H-i-s") . $file_name);
        } else {
            $_SESSION['error'] = "Le fichier doit être au format CSV";
            header("Location: /addNewStudents");
        }

        $loop = 0;

        if (($open = fopen("views/content/uploads/" . date("d-m-y-H-i-s") . $file_name, "r")) !== FALSE) {

            while (($data = fgetcsv($open, 1000, ";")) !== FALSE) {
                $array[] = $data;
                $loop++;
            }

            for ($i = 0; $i < $loop; $i++) {
                if(UsersModel::addUser($array[$i][0], $array[$i][1], $array[$i][2], $array[$i][3], password_hash($array[$i][4], PASSWORD_DEFAULT), $array[$i][5], $array[$i][6])){
                    $_SESSION['success'] = "Opération effectuée avec succès";
                }
                else{
                    $_SESSION['error'] = "L'opération s'est arrêté (Vérifiez le fichier csv)";
                }
            }

            fclose($open);
            header("Location: /addNewStudents");
        }
    }
}
