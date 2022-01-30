<?php

// Start the session & set session variables
session_start();

include("./includes/dbh.inc.php");
include("./includes/functions.inc.php");

$user_data = check_login($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Developed for CAT304 Project" />
    <meta name="author" content="Group 34" />
    <title>Welcome to MyVak</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap core CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>
<body>
<div class="d-flex" id="wrapper">
    <!-- Sidebar-->
    <?php
    if ($_SESSION['user_cat'] == "admin"){
        echo "<style>";
        echo ".user-only {";
        echo "display:none;";
        echo "}";
        echo "</style>";
    }
    else if ($_SESSION['user_cat'] == "user"){
        echo "<style>";
        echo ".admin-only {";
        echo "display:none;";
        echo "}";
        echo "</style>";
    }
    else{
        echo "<style>";
        echo "#sidebar-wrapper, #sidebarToggle {";
        echo "display:none;";
        echo "}";
        echo "</style>";
    }
    ?>
    <div class="border-end bg-white" id="sidebar-wrapper">
        <div class="sidebar-heading border-bottom bg-light">MyVak Menu</div>
        <div class="list-group list-group-flush">
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Dashboard</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3 admin-only" href="#!">Admin</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="account.php">Account</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3 user-only" href="record.php">Records</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3 user-only" href="./appointment.php">Appointment</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3 user-only" href="recommender.php">Recommendation</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Help</a>
        </div>
    </div>
    <!-- Page content wrapper-->
    <div id="page-content-wrapper">
        <!-- Top navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            <div class="container-fluid">
                <button class="btn btn-primary" id="sidebarToggle">MyVak Menu</button>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                        <li class="nav-item active"><a class="nav-link" href="./">Home</a></li>
                        <li class="nav-item active"><a class="nav-link" href="./logout.php">Logout</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Help</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page content-->
        <div class="container-fluid">
