<?php
session_start();
$_SESSION["administrador"]=0;
$_SESSION["usuario"]=0;
$_SESSION["documento"]=0;
header("location:index.php")
?>