<?php
    class Usuario{
        public function aprobando_asistencia($id_horario,$fk_cod_estado_solicitud){
            include ("conexion.php");
           
            mysqli_query($db,"UPDATE horarios SET fk_cod_estado_solicitud = '1' WHERE id_horario='$id_horario'  ");
              
                    header("location:aprobar_solicitudes.php");
        }
    }
    $final= new Usuario();
$final->aprobando_asistencia($_POST["id_horario"],$_POST["fk_cod_estado_solicitud"]);
?>