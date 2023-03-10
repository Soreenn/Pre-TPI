<?php

namespace models;

class TripsModel
{
    public static function getCurrentTrip(){
        $raw = Db::QuerySelect('SELECT * FROM trip ORDER BY startdate');
        return $raw;
    }

    public static function addNewTrip($destination, $startDate, $endDate, $description){
        $result = Db::QuerySelect("INSERT INTO trips (destination, startDate, endDate, description) VALUES ('$destination', '$startDate', '$endDate', '$description')");
        return $result;
    }
}

?>