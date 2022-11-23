<?php

include "conect.php";

$codigoClient = $_GET["codigoClient"];

mysqli_query($sql,"delete from cliente where codigoClient = $codigoClient");

header("Location: ../index.php");
?>