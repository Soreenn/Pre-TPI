<?php

namespace controllers;

use models\TripsModel;

class TripController
{
    public static function show()
    {
        require "./views/trip.php";
    }

    public static function createNewTrip($tripData)
    {
        $destination = $tripData['destination'];
        $startDate = $tripData['startDate'];
        $endDate = $tripData['endDate'];
        $description = $tripData['description'];
        if ($tripData['destination'] != "" && $tripData['startDate'] != "" && $tripData['endDate'] != "" && $tripData['description'] != "") {
            if (TripsModel::addNewTrip($destination, date("Y-m-d", strtotime($startDate)), date("Y-m-d", strtotime($startDate)), $description)) {
                header("Location: /home");
            }
        } else {
            $_SESSION['error'] = "Formulaire incomplet.";
            header("Location: /trip");
        }
    }
}
