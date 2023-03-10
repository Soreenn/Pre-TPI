<?php

namespace controllers;

use models\TripsModel;

class TripController
{
    public static function show(){
        require "./views/trip.php";
    }

    public static function createNewTrip($tripData){
        $destination = $tripData['destination'];
        $startDate = $tripData['startDate'];
        $endDate = $tripData['endDate'];
        $description = $tripData['description'];
        if ($tripData['destination'] != "" && $tripData['startDate'] != "" && $tripData['endDate'] != "" && $tripData['description'] != "") {
            if(TripsModel::addNewTrip($destination, $startDate, $endDate, $description)){
                header("Location: /home");
            }
            else{
                header("Location: /trip");
            }
        }
    }
}
