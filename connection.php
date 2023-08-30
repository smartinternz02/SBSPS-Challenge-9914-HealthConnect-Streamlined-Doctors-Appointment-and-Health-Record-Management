<?php

    $database= new mysqli("localhost","root","","databases");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>
