<!-- <?php
// include("seguridad_admin.php");
?> -->



<!DOCTYPE html>

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Solicitudes </title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
   
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"/>
      
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="estilos.css" rel="stylesheet" />
        <link href="iconos.css" rel="stylesheet" />
    </head>
    <body id="page-top">
  
<?php
include ("menu_usuarios.php")
?>


            </div>
        </nav>
        <!-- Header-->
        <header class="masthead text-center text-white">
            <div class="masthead-content">
                <div class="container px-5">
                  
                    <h2 class="masthead-subheading mb-0">Hola!</h2>
             
                </div>
            </div>
            <div class="bg-circle-1 bg-circle"></div>
            <div class="bg-circle-2 bg-circle"></div>
            <div class="bg-circle-3 bg-circle"></div>
            <div class="bg-circle-4 bg-circle"></div>
        </header style =padding-buttom:100px;>
  
  
<?php
    echo "</br></br></br></br></br>"
?>
<?php
class Usuario
{
    public function aprobar() 
    {
        include ("conexion.php");

                       
            echo '<h2 style="font-size: 24px; font-weight: bold; text-align: center;"> Solicitudes</h2>';
            echo "<table style='border-collapse: collapse; width: auto; margin: 0 auto;'>";
            echo "<tr>";
            echo "<th style='border: 1px solid black;'>Nombres</th>";
            echo "<th style='border: 1px solid black;'>Apellidos</th>";
            echo "<th style='border: 1px solid black;'>Documento</th>";
            echo "<th style='border: 1px solid black;'>Fecha</th>";
            echo "<th style='border: 1px solid black;'>Hora</th>";
           
            echo "<th style='border: 1px solid black;'>Estado</th>";
           
            echo "<th style='border: 1px solid black;' ><span class='material-symbols-outlined aprobar'> check_circle</span> </th>";
            echo "<th style='border: 1px solid black;' padding:5px;><span class='material-symbols-outlined no-aprobar'> cancel</span></th>";
            echo "</tr>";

              ////////////////////// SUBCONSULTA
       $sql2 = "SELECT * FROM solicitudes";
       if(!$result2 = $db->query($sql2)){
        die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
       }

        while ($row2 = $result2->fetch_assoc()) {
            $ffecha = stripslashes($row2["fecha"]);
            $hhora = stripslashes($row2["hora"]);  
            $ddocumento = stripslashes($row2["fk_documento"]);
            $iid_solicitud= stripcslashes($row2["id_solicitud"]);

            $ffk_cod_estado_solicitud= stripcslashes($row2["fk_cod_estado_solicitud"]) ;
                  
        
            $sql = "SELECT nombres, apellidos FROM USUARIOS WHERE DOCUMENTO = $ddocumento";
            if(!$result = $db->query($sql)){
                die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
            } 
            while ($row = $result->fetch_assoc()) {
                $nnombres = stripslashes($row["nombres"]);
                $aapellidos = stripslashes($row["apellidos"]);
            }

             ///////////////////
       $sql3 = "SELECT * FROM estado_solicitudes WHERE cod_estado_solicitudes='$ffk_cod_estado_solicitud'";
       if(!$result3 = $db->query($sql3)){
           die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
       }
       while ($row3 = $result3->fetch_assoc()) 
       {
           $eestado_solicitud = stripslashes($row3["estado_solicitud"]);
       }
       //////////////////
            echo "<tr>";
            echo "<td style='border: 1px solid black; padding: 5px;'>$nnombres</td>";
            echo "<td style='border: 1px solid black; padding: 5px;'>$aapellidos</td>";
            echo "<td style='border: 1px solid black; padding: 5px;'>$ddocumento</td>";
            echo "<td style='border: 1px solid black; padding: 5px;'>$ffecha</td>";
            echo "<td style='border: 1px solid black; padding: 5px;'>$hhora</td>";
            echo "<td style='border: 1px solid black; padding: 5px;'>$eestado_solicitud</td>";
            echo "<td style='border: 1px solid black;'>";
        
            echo "<form name='' method='POST' action='aprobando_asistencia.php' required>";
            echo "<input name='id_solicitud' type='hidden' value='$iid_solicitud'>";
            echo "<input type='submit' value='Aprobar'>";
            echo "</form>";

            echo "</td>";
            echo "<td style='border: 1px solid black;'>";
            echo "<form name='' method='POST' action='desaprobando_solicitud' required>";
            echo "<input type='checkbox' required>";
            echo "<input name='id_solicitud' type='hidden' value='$iid_solicitud'>";
            echo "<input type='submit' value='No aprobar'>";
            echo "</form>";
            echo "</td>";
        
            echo "</tr>";
        }
            
       
                echo "</table> "; // fin de tabla
        
            
 
}//Fin de método
}//Fin de clase
$final= new Usuario();
$final->aprobar();

?>
</br></br>

        <p> <a href="ADMINISTRADOR.php" class="btn btn-primary btn-Ig" role="button"> Volver atras </a> </p>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        
        <!-- Footer -->
            <?php
            include ("footer.php");
            ?>
         

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
