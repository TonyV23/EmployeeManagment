<?php

    // configuration des details pour la connection à la base de donnee
    $serverName = "localhost";
    $user = "root";
    $password = "";
    $databaseName = "EmployeM";

    $connection_to_database = mysqli_connect($serverName, $user, $password, $databaseName);

    if (!$connection_to_database)
        echo "connected to the database"
?>