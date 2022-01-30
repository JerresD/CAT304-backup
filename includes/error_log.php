<?php

// To log errors to error.log file
function log_error($e){
    $log_file = fopen('./error.log','a');
    $log_file_content =
        'Start log'. PHP_EOL . '..' .
        PHP_EOL . PHP_EOL .
        'Date and Time: ' . PHP_EOL . date("l, M d Y, H:i:s") .
        PHP_EOL . PHP_EOL .
        'Error: Code ' . $e->getCode() . ' - ' . $e->getMessage() .
        PHP_EOL . PHP_EOL .
        'Location: Line ' . $e->getLine() . ' in ' . $e->getFile() .
        PHP_EOL . PHP_EOL .
        '..' . PHP_EOL . 'End log' .
        PHP_EOL . PHP_EOL;
    fwrite($log_file,$log_file_content);
    fclose($log_file);
}

?>
