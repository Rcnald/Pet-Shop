<?php

include "conect.php";

    $name = $_POST["animalName"];
    $raca = $_POST["animalRaca"];
    $idade  = $_POST["animalIdade"];
    $porte = $_POST["animalPorte"];

    $sql -> query("insert into animal(codigoAnimal, animalName, animalRaca, animalIdade, animalPorte) value(null,'$name','$raca','$idade','$porte')");

    header("Location: ../index.php");
?>