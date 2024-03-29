<?php
include 'autoload.php';

use controllers\ActivitiesController;
use controllers\HomeController;
use controllers\AuthentificationController;
use controllers\StudentController;
use controllers\TripController;
use controllers\UserController;

header_remove();

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Remove get parameters
$uri = strtok($_SERVER["REQUEST_URI"], '?');
// Remove ending /
$uri = (strlen($uri) > 1) ? preg_replace("/\/$/", '', $uri) : $uri;

switch ($uri) {
    case "/":
    case "/home":
        HomeController::show();
        break;
    case "/login":
        AuthentificationController::show();
        break;
    case "/authenticate":
        AuthentificationController::authenticate($_POST);
        break;
    case "/logout":
        AuthentificationController::logout();
        break;
    case "/trip":
        TripController::show();
        break;
    case "/createNewTrip":
        TripController::createNewTrip($_POST);
        break;
    case "/addNewStudents":
        UserController::show();
        break;
    case "/importNewStudents":
        UserController::importNewStudents($_POST);
        break;
    case "/studentList":
        StudentController::show();
        break;
    case "/addActivitie":
        ActivitiesController::show();
        break;
    case "/createNewActivitie":
        ActivitiesController::createNewActivitie($_POST);
        break;
    case "/activitiesList":
        ActivitiesController::showList();
        break;
    default:
        break;
}
