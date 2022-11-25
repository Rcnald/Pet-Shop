<?php

include "conect.php";

    $codigoClient = $_POST["codigoClient"];
    $clientName = $_POST["clientName"];
    $clientEmail = $_POST["clientEmail"];
    $clientPassword  = $_POST["clientPassword"];

   $sql ->query("update cliente set clientName='$clientName', clientEmail='$clientEmail',clientPassword='$clientPassword' where codigoClient = $codigoClient");

   header("Location: ../index.php"); 
?>