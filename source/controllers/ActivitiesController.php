<?php

namespace controllers;

use models\ActivitiesModel;
use models\TripsModel;

class ActivitiesController
{
    public static function show()
    {
        require "./views/addActivitie.php";
    }

    public static function showList()
    {
        $raw = ActivitiesModel::getActivities();
        require "./views/activitiesList.php";
    }

    public static function createNewActivitie($activitieData)
    {
        $rawTrip = TripsModel::getCurrentTrip();
        if (count($rawTrip) >= 1) {
            if ($activitieData['name'] != "" && $activitieData['address'] != "" && $activitieData['date'] != "") {
                ActivitiesModel::addNewActivitie($activitieData['name'], $activitieData['address'], date("Y-m-d", strtotime($activitieData['date'])), $rawTrip[0]['id']);
                $_SESSION['success'] = "Activitée ajoutée avec succès !";
                header("Location: /addActivitie");
            } else {
                $_SESSION['error'] = "Formulaire incomplet.";
                header("Location: /addActivitie");
            }
        }else{
            $_SESSION['error'] = "Pas de voyage planifié.";
            header("Location: /addActivitie");
        }
    }
}
