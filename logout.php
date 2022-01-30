<?php
session_start();

    if(isset($_SESSION['mykad'])) {
        unset($_SESSION['mykad']);
    }

    header("location: login.php");
    exit();
?>