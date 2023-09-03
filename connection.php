<?php

    $database= new mysqli("localhost","ayush","1234","databases");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>
