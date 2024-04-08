
<!DOCTYPE html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Mis solicitudes </title>
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
    <link href="botones.css" rel="stylesheet" />
</head>
<body id="page-top">

<?php
include ("menu_usuarios.php")
?>


        </div>
    </nav>
    <!-- Header-->
    <header class="masthead text-center text-white"     style="padding-bottom:padding-bottom: 100px;padding-top: 100px;">
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
            <h1 style="text-align:center;">Mis solicitudes</h1>

        <?php
            class Usuario{
                
                public function mis_permisos($documento){
                
                    echo "<table style='border-collapse: collapse; width: auto; margin: 0 auto;'>";
                    echo "<tr>";
                    echo "<th style='border: 1px solid black;'>Nombres</th>";
                    echo "<th style='border: 1px solid black;'>Apellidos</th>";
                    echo "<th style='border: 1px solid black;'>Documento</th>";
                    echo "<th style='border: 1px solid black;'>Fecha</th>";
                    echo "<th style='border: 1px solid black;'>Hora</th>";
                     echo "<th style='border: 1px solid black;'>Estado</th>";
                
        
                      
                      include("conexion.php");
               $sql2 = "SELECT * FROM solicitudes where fk_documento ='$documento'";
               if(!$result2 = $db->query($sql2)){
                die('Hay un error corriendo en la consulta o datos no encontrados1!!! [' . $db->error . ']');
               }
        
                while ($row2 = $result2->fetch_assoc()) {
                   
                    $ffecha = stripslashes($row2["fecha"]);
                    $hhora = stripslashes($row2["hora"]);  
                    $ddocumento = stripslashes($row2["fk_documento"]);
                    $iid_solicitud= stripcslashes($row2["id_solicitud"]);
        
                    $ffk_cod_estado_solicitud= stripcslashes($row2["fk_cod_estado_solicitud"]) ;
                          
                ////////////////////// SUBCONSULTA
                    $sql = "SELECT * FROM usuarios WHERE documento = '$ddocumento'";
                    if(!$result = $db->query($sql)){
                        die('Hay un error corriendo en la consulta o datos no encontrados2!!! [' . $db->error . ']');
                    } 
                    while ($row = $result->fetch_assoc()) {
                        
                        $nnombres = stripslashes($row["nombres"]);
                        $aapellidos = stripslashes($row["apellidos"]);
                    }
        
                     ///////////////////
               $sql3 = "SELECT * FROM estado_solicitudes WHERE cod_estado_solicitudes='$ffk_cod_estado_solicitud'";
               if(!$result3 = $db->query($sql3)){
                   die('Hay un error corriendo en la consulta o datos no encontrados3!!! [' . $db->error . ']');
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
                    echo "<td style='border: 1px solid black; padding: 5px;'>$hhora:00 horas.</td>";
                    echo "<td style='border: 1px solid black; padding: 5px;'>$eestado_solicitud</td>";
                    echo"</tr>";
                    
            }
            echo"</table> </br>";
        }
    }
    $final= new Usuario();
    $final->mis_permisos($_POST["documento"]);
        ?>


</div>
                    </div>
                </div>
            </div>
        </section>
        <div class="button">
        <a href="javascript:history.back()" class="btn btn-link" role="button"> Volver atrás </a> 
        </div>
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
