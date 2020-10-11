<?php

    $host = "comarca-cowork.com";
    $dbname = "pasitoap_academia";
    $username = "pasitoap_comarca";
    $password = "4c4d3m14_c0m2020";
    $conn = "mysql:host=$host;dbname=$dbname";
    // Create connection

    try{
        $conexion = new PDO($conn,$username,$password);
    }catch(PDOException $error){
        echo $error->getMessage();
    }


?>