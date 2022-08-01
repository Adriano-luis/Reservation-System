<?php

class Car {

    private $pdo;

    public function __construct($db) {
        $this->pdo = $db;
    }

    public function getCars(){
        $sql = "SELECT * FROM cars";
        $sql = $this->pdo->query($sql);

        if($sql->rowCount() > 0){
            $cars = $sql->fetchAll();
            return $cars;
        }
        return "No registers!";
    }

    public function ableToBook($car, $date_start, $date_end){
        $sql = "SELECT * FROM reservations WHERE id_car = :car AND (NOT (date_init > :date_end OR date_end < :date_start))";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(":car", $car);
        $sql->bindValue(":date_start", $date_start);
        $sql->bindValue(":date_end", $date_end);
        $sql->execute();

        if($sql->rowCount() > 0)
            return false;
        return true;
    }

    public function book($car, $date_start, $date_end, $user_id){
        $sql = "INSERT INTO reservations (id_car, date_init, date_end, user_id) VALUES (:car, :date_start, :date_end, :user_id)";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':car', $car);
        $sql->bindValue(':date_start', $date_start);
        $sql->bindValue(':date_end', $date_end);
        $sql->bindValue(':user_id', $user_id);
        $sql->execute();
    }
}