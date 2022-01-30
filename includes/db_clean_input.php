<?php

function clean_input($raw_input) {
    $cleaned_input = trim($raw_input);
    $cleaned_input = stripslashes($cleaned_input);
    $cleaned_input = htmlspecialchars($cleaned_input);
    $cleaned_input = str_replace("'", "&apos;", $cleaned_input);

    return $cleaned_input;
}

?>