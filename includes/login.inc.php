<?php
session_start();

    include("dbh.inc.php");
    include("functions.inc.php");

    $mykad = $_POST['mykad'];
    $password = $_POST['Password'];

    $mykad = stripslashes($mykad);
    $password = stripslashes($password);
    $mykad = mysqli_real_escape_string($conn, $mykad);
    $password = mysqli_real_escape_string($conn, $password);

    $result = mysqli_query($conn, "select * from users where mykad = '$mykad' and password = '$password'")
        or die("Failed to query database".mysqli_error($conn));
    $row = mysqli_fetch_array($result);
    if($row['mykad'] == $mykad && $row['password'] == $password) {
        echo "Login success";
        $user_data = $row;
        $_SESSION['mykad'] = $user_data['mykad'];
        header("location: ../index.php");
        exit();
    }

    else {
        login_failed();
    }
?>