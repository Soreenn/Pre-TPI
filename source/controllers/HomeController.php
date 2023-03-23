<?php

namespace controllers;

use models\TripsModel;

class HomeController
{
    public static function show()
    {
        $raw = TripsModel::getCurrentTrip();
        $startDate = $raw[0]['startdate'];
/*         $currentDate = strtotime(date("Y-m-d h:i:s"));
        $interval = abs($startDate - $currentDate);
        $months = floor($interval / (30 * 60 * 60 * 24));
        $days = floor($interval - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24);
        $hours = floor(($interval - $months * 30 * 60 * 60 * 24 - $days * 60 * 60 * 24) / (60 * 60));
        $minutes = floor(($interval - $months * 30 * 60 * 60 * 24 - $days * 60 * 60 * 24 - $hours * 60 * 60) / 60);
        $seconds = floor(($interval - $months * 30 * 60 * 60 * 24 - $days * 60 * 60 * 24 - $hours * 60 * 60 - $minutes * 60));
        echo round($months) . " " . round($days) . " " . round($hours) . " " . round($minutes) . " " . round($seconds); */
        require "./views/home.php";
    }
}
