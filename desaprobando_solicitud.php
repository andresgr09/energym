<?php
    class Usuario{
        public function desaprobando_asistencia($id_solicitud,$fk_cod_estado_solicitud){
            include ("conexion.php");
           
            mysqli_query($db,"UPDATE solicitudes SET fk_cod_estado_solicitud = '3' WHERE id_solicitud='$id_solicitud'");
              
                    header("location:aprobar_solicitudes.php");
        }
    }
    $final= new Usuario();
$final->desaprobando_asistencia($_POST["id_solicitud"],$_POST["fk_cod_estado_solicitud"]);
?>