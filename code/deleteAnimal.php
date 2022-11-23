<?php

include "conect.php";

$codigoAnimal = $_GET["codigoAnimal"];

mysqli_query($sql,"delete from animal where codigoAnimal = $codigoAnimal");

header("Location: ../index.php");
?>