<?php

namespace models;

class ActivitiesModel
{
    public static function getActivities(){
        $strSeparator = '\'';
        $rawTrip = TripsModel::getCurrentTrip();
        $raw = Db::QuerySelect('SELECT * FROM activities WHERE trip_id = ' . $strSeparator . $rawTrip[0]['id'] . $strSeparator);
        return $raw;
    }

    public static function addNewActivitie($address, $name, $date, $trip){
        $result = Db::QuerySelect("INSERT INTO activities (name, address, date, trip_id) VALUES ('$name', '$address', '$date', '$trip')");
        return $result;
    }
}

?>