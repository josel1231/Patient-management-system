<?php

    $database= new mysqli("localhost","root","",database: "gdatabase");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>