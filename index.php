<?php
require "config.php";
require "class/ReservationClass.php";
require "class/CarClass.php";

$reservations = new Reservation($pdo);
?>
<a href="booking.php">Make your reservation here</a><br>
<h1>Reservations</h1>
<?php 
    $reservationsList = $reservations->getReservations();
    foreach ($reservationsList as $item){
        $date_init = date('d/m/Y', strtotime($item['date_init']));
        $date_end = date('d/m/Y', strtotime($item['date_end']));

        echo "The User with ID ".$item['user_id']." reservated the car with ID ".$item['id_car']." from ".$date_init." to ".$date_end."<br><br>";
    }
?>