<?php

include_once './includes/db_info.php';

// INITIALIZE VARIABLES
$db_Tbl = 'vac_record';
$user_id = 4;
$limit = 5;

try{
    // CONNECT TO DATABASE
    $conn = db_conn();

    // FIND TOTAL RECORDS AND PAGES
    $sql        = "SELECT COUNT(rec_id) FROM " . $db_Name . " . " . $db_Tbl . " WHERE user_id=" . $user_id;
    $result     = $conn->query($sql);
    $row = $result->fetch_row();
    $total_records = $row[0];
    $total_pages = ceil($total_records / $limit);

    // IF THERE IS MORE THAN 1 PAGE, RECREATE THE PAGINATION LINK
    if ($total_pages > 1){
        echo '<li class="page-item disabled"><a class="page-link" href="#">Page</a></li>';
        for ($i=1; $i <= $total_pages; $i++){
            echo '<li class="page-item">';
            echo '<a class="page-link" href="#" onclick="viewRec(' . $i . ')">' . $i . '</a>';
            echo '</li>';
        }
    } else{
        echo '<li class="page-item disabled"><a class="page-link" href="#">Page</a></li>';
        echo '<li class="page-item disabled"><a class="page-link" href="#">1</a></li>';
    }

    // FREE RESULT SET
    mysqli_free_result($result);

} catch(Exception $e){
    log_error($e);
    echo '<li class="page-item disabled"><a class="page-link" href="#">Page</a></li>';
    echo '<li class="page-item disabled"><a class="page-link" href="#">1</a></li>';
}

?>