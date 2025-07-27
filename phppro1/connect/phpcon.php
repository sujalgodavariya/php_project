<?php
    // Connect to MySQL (assuming no password)
    $con = mysqli_connect("localhost", "root", "", "php_pro");

    // Check connection
    if (!$con) {
        echo"database not connect...!";
    }
?>
