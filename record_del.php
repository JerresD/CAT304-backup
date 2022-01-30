<?php

include_once './includes/db_info.php';

// INITIALIZE VARIABLES
$db_Tbl = 'vac_record';
$id = '';

try{
    // ACCEPT VALUE FROM POST AND CLEAN IT
    if ($_SERVER['REQUEST_METHOD'] == "GET"){
        $id = clean_input($_GET['id']);
    }

    // IF THE VALUE IS NOT AN INTEGER
    // OR AN INTEGER THAT IS NOT GREATER THAN 0
    // THEN REDIRECT
    if ($id == '' || (is_int($id) && $id <= 0)){
        header('Location: ./');
        exit();
    }

    // CONNECT TO DATABASE
    $conn = db_conn();

    // DELETE RECORD BASED ON RECORD ID
    $sql = "DELETE FROM " . $db_Name . "." . $db_Tbl . " WHERE rec_id=" . $id;
    $result = $conn->query($sql);

    echo '<div class="alert alert-warning alert-dismissible">';
    echo '<button type="button" class="btn-close" data-bs-dismiss="alert" onclick="document.location.reload(true)">';
    echo '</button>';
    echo '<strong>Record ' . $id . '</strong> deleted.';
    echo '</div>';

} catch(Exception $e){
    log_error($e);
    echo '<div class="alert alert-danger alert-dismissible">';
    echo '<button type="button" class="btn-close" data-bs-dismiss="alert"></button>';
    echo 'Error: Failed to delete <strong>Record ' . $id . '</strong>. Please refresh this page and try again.';
    echo '</div>';
}

?>