<?php

class Reservation {

    private $pdo;

    public function __construct($db) {
        $this->pdo = $db;
    }

    public function getReservations(){
        $sql = "SELECT * FROM reservations";
        $sql = $this->pdo->query($sql);

        if($sql->rowCount() > 0){
            $reservations = $sql->fetchAll();
            return $reservations;
        }else
            return "No registers!";
    }
}