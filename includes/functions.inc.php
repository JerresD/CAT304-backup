<?php

function check_login($conn) {
    if(isset($_SESSION['mykad'])) {
        $mykad = $_SESSION['mykad'];
        $query = "select * from users where mykad = '$mykad' limit 1";

        $result = mysqli_query($conn, $query);
        if($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }
    else {
        header("location: login.php");
        exit();
    }
}

function get_remind_info($conn) {
    $result = mysqli_query($conn, "select * from reminder")
    or die("Failed to query database".mysqli_error($conn));

    if ($result && mysqli_num_rows($result) > 0) {
        $i = 1;
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['vac_for'] . "</td>";
            echo "<td>" . $row['vac_date'] . "</td>";
            echo "<td>" . $row['vac_time'] . "</td>";
            echo "<td>" . $row['vac_location'] . "</td>";
            echo "<td>" . $row['comment'] . "</td>";
            echo "<td>";
            $i++;
        }
    }else{ // IF NO RECORD, SHOW THIS INSTEAD
        echo "<tr>";
        echo "<td colspan='10'>No record found. Please add a new record.</td>";
        echo "</tr>";
    }
}

function login_failed() {
    echo "Login failed";
    echo "<script>alert('Username and password does not match. Please try again')</script>";
    echo "<script>window.location.href='../login.php'</script>";
}
