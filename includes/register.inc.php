<?php
session_start();

    include("dbh.inc.php");
    include("functions.inc.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $name = $_POST['name'];
        $mykad = $_POST['mykad'];
        $citizenship = $_POST['Citizenship'];
        $birthdate = $_POST['DateOfBirth'];
        $email = $_POST['email'];
        $address = $_POST['Address'];
        $password = $_POST['Password'];
        $RPTpassword = $_POST['RepeatPassword'];

        if(!empty($name) && !empty($mykad) && !empty($citizenship) && !empty($birthdate) &&
            !empty($email) && !empty($address) && !empty($password) && !empty($RPTpassword)) {

            if($password !== $RPTpassword) {
                echo "Password not match. ";
                echo "<script>alert('Password and repeat password does not match. Please try again')</script>";
                echo "<script>window.location.href='../register.php'</script>";
                exit();
            }

            $query = "insert into users (name, mykad, citizenship, birthdate, email, address, password, repeat_password) 
                        values ('$name', '$mykad', '$citizenship', '$birthdate', '$email', '$address', '$password', '$RPTpassword')";

            mysqli_query($conn, $query);

            header("location: ../login.php");
            exit();
        }
        else {
            echo "Some boxes are blank!";
        }

    }
?>