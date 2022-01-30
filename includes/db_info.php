<?php

// Set timezone
date_default_timezone_set("Asia/Kuala_Lumpur");

// DB info
$db_Svr = 'sql6.freemysqlhosting.net';
$db_Port = 3306;
$db_Name = 'sql6465341';
$db_User = 'sql6465341';
$db_Pwd = 'TNfcNVSuHu';

// For database connection
function db_conn(){
    // DB info
    $db_Svr = 'sql6.freemysqlhosting.net';
    $db_Port = 3306;
    $db_Name = 'sql6465341';
    $db_User = 'sql6465341';
    $db_Pwd = 'TNfcNVSuHu';

    // Create connection and log connection error
    try{
        $conn = new mysqli($db_Svr,$db_User,$db_Pwd,$db_Name,$db_Port);
        return $conn;
    }catch(Exception $e){
        log_error($e);
    }
}

include_once './includes/db_error_log.php';
include_once './includes/db_clean_input.php';

?>