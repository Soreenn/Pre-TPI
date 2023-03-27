<?php

namespace controllers;

use models\TripsModel;

class HomeController
{
    public static function show()
    {
        $raw = TripsModel::getCurrentTrip();
        $startDate = $raw[0]['startdate'];
        require "./views/home.php";
    }
}
