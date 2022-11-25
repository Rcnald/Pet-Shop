<?php

include "conect.php";

    $codigoAnimal = $_POST["codigoAnimal"];
    $animalName = $_POST["animalName"];
    $animalRaca = $_POST["animalRaca"];
    $animalIdade  = $_POST["animalIdade"];
    $animalPorte  = $_POST["animalPorte"];

   $sql ->query("update animal set animalName='$animalName', animalRaca='$animalRaca', animalIdade='$animalIdade', animalPorte='$animalPorte' where codigoAnimal = $codigoAnimal");

   header("Location: ../index.php"); 
?>