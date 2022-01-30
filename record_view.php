<?php

include_once './includes/db_info.php';

// INITIALIZE VARIABLES
$db_Tbl = 'vac_record';
$db_Tbl_Users = 'users';
//$user_mykad = $_SESSION['mykad'];
$user_id = 4;
$limit  = 5;
$offset  = 0;

try{

    // ACCEPT VALUE FROM POST AND CLEAN IT
    if ($_SERVER['REQUEST_METHOD'] == "GET"){
        $page = clean_input($_GET['p']);
    }

    // IF THE VALUE IS NOT AN INTEGER
    // OR AN INTEGER THAT IS NOT GREATER THAN 0
    // THEN REDIRECT
    if ($page == '' || (is_int($page) && $page < 1)){
        header('Location: ./');
        exit();
    }

    // CALCULATE OFFSET EXCEPT FOR 1ST PAGE
    if ($page > 1){
        $offset = ($page - 1) * $limit;
    }

    // CONNECT TO DATABASE
    $conn = db_conn();

    // GET USER ID FIRST
  //  $sql        = "SELECT ID FROM " . $db_Name . " . " . $db_Tbl_Users .
  //      " WHERE mykad=" . $user_mykad;
  //  $result     = $conn->query($sql);
  // $row        = $result->fetch_row();
  // $user_id    = $row[0];

    // FREE RESULT SET
    //mysqli_free_result($result);

    // GET SQL QUERY RESULT
    $sql        = "SELECT * FROM " . $db_Name . " . " . $db_Tbl .
        " WHERE user_id=" . $user_id . " LIMIT " . $limit  . " OFFSET " . $offset;
    $result     = $conn->query($sql);
    // IF THERE IS AT LEAST ONE RECORD, PUT THE RECORD ON THE TABLE
    if ($result->num_rows > 0){
        $i = 1;
        while($row = $result->fetch_assoc()){
            echo "<tr>";
            echo "<td>" . $row['rec_id'] . "</td>";
            echo "<td>" . $row['vac_for'] . "</td>";
            echo "<td>" . $row['vac_date'] . "</td>";
            echo "<td>" . $row['vac_time'] . "</td>";
            echo "<td>" . $row['vac_location'] . "</td>";
            echo "<td>" . $row['vac_batch_id'] . "</td>";
            echo "<td>" . $row['vac_comment'] . "</td>";
            echo "<td>";

            // IF THE NEXT DUE DATE IS KNOWN, SHOW THE DATE
            if ($row['vac_next_due_info'] == 'DATE'){
                echo $row['vac_next_due_date'];
            } else{ // OTHERWISE, SHOW OTHER NEXT DUE INFO
                echo $row['vac_next_due_info'];
            }

            echo "</td>";
            echo "<td><a class='nav-link' href='record_update.php?id=" . $row['rec_id'] . "'>[&#9998;]</a></td>";
            echo "<td><a class='nav-link' href='#' onclick='delRec(" . $row['rec_id'] . ")'>[&#10007;]</a></td>";
            echo "</tr>";
            $i++;
        }
    } else{ // IF NO RECORD, SHOW THIS INSTEAD
        echo "<tr>";
        echo "<td colspan='10'>No record found. Please add a new record.</td>";
        echo "</tr>";
    }

    // FREE RESULT SET
    mysqli_free_result($result);

} catch(Exception $e){
    log_error($e);
    echo "<tr>";
    echo "<td colspan='10'>&#9888; Failed to load. Please refresh this page.</td>";
    echo "</tr>";
}

?>