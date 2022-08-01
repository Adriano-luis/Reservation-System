<?php
    require "config.php";
    require "class/ReservationClass.php";
    require "class/CarClass.php";

    $reservations = new Reservation($pdo);
    $cars = new Car($pdo);


    if(isset($_POST['car'])){
       $car =  addslashes($_POST['car']);
       $date_start =  addslashes(date('Y-m-d', strtotime($_POST['date_start'])));
       $date_end =  addslashes(date('Y-m-d', strtotime($_POST['date_end'])));
       $user_id =  addslashes($_POST['user_id']);

       if($cars->ableToBook($car, $date_start, $date_end)){
           $cars->book($car, $date_start, $date_end, $user_id);
           header("Location: index.php");
           exit;
       }
       echo "This car is already booked!";
       
    }
?>

<h1>New Reservation</h1>
<form method="POST">
    <label for="car">Car:</label>
    <select name="car" id="car">
        <?php
            $dataCars = $cars->getCars();
            foreach ($dataCars as $car): ?>
                <option value="<?= $car['id']; ?>"><?= $car['model']; ?></option>
            <?php endforeach;
        ?>
    </select><br><br>

    <label for="start_from">Start from date:</label>
    <input type="date" name="date_start" id="start_from"><br><br>

    <label for="to">To date:</label>
    <input type="date" name="date_end" id="to"><br><br>

    <label for="user_id">User id:</label>
    <input type="text" name="user_id" id="user_id">

    <input type="submit" value="Book">
</form>