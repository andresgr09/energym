<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="form.css" rel="stylesheet" />
    <title>Document</title>
</head>
<body>
    
<?php

?>
<?php
class Usuario{
      public function insertar($fecha,$hora)
     
    {
        $fk_documento=$_SESSION["documento"];
        $fk_cod_estado_solicitud="1";
    include('conexion.php');
    $fk_cod_estado_solicitud=1;
mysqli_query($db,"INSERT INTO horarios (id_horario, fecha, hora,fk_documento,fk_cod_estado_solicitud ) 
VALUES (NULL, '$fecha','$hora','$fk_documento','$fk_cod_estado_solicitud')");


echo  "la reserva de su asistencia es $fecha" ; 
echo " y la hora es $hora:00 horas. </br>" ; 
echo " tenga en cuenta que dependiendo el aforo sera aprobada o no su reserva! </br>";
echo "<a href='asistente.php' class='btn btn-primary btn-Ig' role='button'> Volver</a> ";

    

    
}
}
$final= new Usuario();
$final->insertar($_POST["fecha"],$_POST["hora"]);
?>
   </body>
</html>