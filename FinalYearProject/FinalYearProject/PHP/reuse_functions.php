<?php 

include_once "connection";

function showErrorMsg($errorMessage) {
    echo "<div class=\"alert alert-error\">$errorMessage</div>";
}

//
function isValidEmail($email) {
     $query = mysql_num_rows(mysql_query("SELECT * FROM Users WHERE Email='$email'"));
    if ($query == 1) {
        return true;
    } else {
        return false;
    }
}

//
function userObjectByEmail($email) {
    $object = mysql_fetch_object(mysql_query("SELECT * FROM Users WHERE Email='$email'"));
    return $object;
}


?>