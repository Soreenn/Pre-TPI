<?php

namespace models;

class TripsModel
{
    public static function getTrip(){
        $raw = Db::QuerySelect('SELECT * FROM trip');
        return $raw;
    }
}

?>