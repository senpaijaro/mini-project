<?php

        $db_host = "localhost";
        $db_user = "root";
        $db_pass = "";
        $db_name = "nmis-project";

        $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

        if($conn->connect_error){
            die("Unknown database " .$conn->connect_error);
        }

