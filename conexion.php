<?php

header("Content-Type: text/html;charset=utf-8");
$db = new mysqli('localhost', 'root', '', 'energym');
$acentos = $db->query("SET NAMES 'utf8'");
if($db->connect_error > 0)
{
    die('No se puede conectar [' . $db->connect_error . ']');
	
}
?>

