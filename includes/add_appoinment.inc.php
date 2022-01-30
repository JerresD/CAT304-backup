<?php
session_start();

include("dbh.inc.php");
include("functions.inc.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $vac_for = $_POST['vac_type'];
    $vac_date = $_POST['app_date'];
    $vac_time = $_POST['app_time'];
    $vac_location = $_POST['location'];
    $comment = $_POST['comment'];

    if(!empty($vac_for) && !empty($vac_date) && !empty($vac_time)
        && !empty($vac_location) && !empty($comment)) {

        $query = "insert into reminder (vac_for, vac_date, vac_time, vac_location, comment) 
                        values ('$vac_for', '$vac_date', '$vac_time', '$vac_location', '$comment')";

        mysqli_query($conn, $query);

        header("location: ../appointment.php");
        exit();
    }
    else {
        echo "Some boxes are blank!";
    }

}
?>