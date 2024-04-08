<?php
include("seguridad_usuario.php");
?>

<head>
  <link rel="stylesheet" href="iconos.css">
</head>
        
        <?php
        class Usuario{
      public function insertar($fecha,$hora)
     
    {
        $fk_documento=$_SESSION["documento"];
        $fk_cod_estado_solicitud="1";
    include('conexion.php');
    $fk_cod_estado_solicitud=1;
mysqli_query($db,"INSERT INTO solicitudes (id_solicitud, fecha, hora,fk_documento,fk_cod_estado_solicitud ) 
VALUES (NULL, '$fecha','$hora','$fk_documento','$fk_cod_estado_solicitud')");
echo"<h3>¡AVISO! <span class='material-symbols-outlined aviso' >warning</span></h3>";
echo"<div class='horario'>";
echo  "La reserva de su asistencia es $fecha" ; 
echo " y la hora es $hora:00 horas. </br>" ; 
echo " tenga en cuenta que dependiendo el aforo sera aprobada o no su reserva!  </br>";
echo "<a href='asistente.php' class='text-form'>volver atrás</a>";
echo"</div>";



    

    
}
}
$final= new Usuario();
$final->insertar($_POST["fecha"],$_POST["hora"]);
?>
 
