<?php

namespace controllers;

include 'autoload.php';

use models\UsersModel;

class AuthentificationController
{
    private static function _createSessions($raw)
    {
        $_SESSION['userEmailAddress'] = $raw[0]['email'];
        $_SESSION['firstname'] = $raw[0]['firstname'];
        $_SESSION['lastname'] = $raw[0]['lastname'];
        $_SESSION['teacher'] = $raw[0]['teacher'];
    }

    public static function authenticate($userFormData)
    {
        $email = $userFormData['email'];
        $password = $userFormData['password'];

        if ($email != "" && $password != "") {

            $raw = UsersModel::getSpecificUserByEmail($email);

            if (count($raw) == 1) {

                $queryPassword = $raw[0]['password'];

                if (password_verify($password, $queryPassword)) {
                    AuthentificationController::_createSessions($raw);
                    header("Location: /");
                } else {
                    $_SESSION['error'] = "Mot de passe incorrect.";
                    header("Location: /login");
                }
            } else {
                $_SESSION['error'] = "Le compte n'existe pas.";
                header("Location: /login");
            }
        } else {
            $_SESSION['error'] = "Formulaire incomplet.";
            header("Location: /login");
        }
    }

    public static function show()
    {
        require "./views/login.php";
    }

    public static function logout()
    {
        $_SESSION = array();
        session_destroy();
        header("Location: /");
    }
}
