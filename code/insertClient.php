<?php

include "conect.php";

    $name = $_POST["clientName"];
    $email = $_POST["clientEmail"];
    $password  = $_POST["clientPassword"];

    $sql -> query("insert into cliente(codigoClient, clientName, clientEmail, clientPassword) value(null,'$name','$email','$password')");

    header("Location: ../index.php");
?>