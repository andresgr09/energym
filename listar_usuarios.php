<?php
ob_start();
include("seguridad_admin.php");
?>



<!DOCTYPE html>

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Usuarios </title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
      
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"/>
      
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="estilos.css" rel="stylesheet" />
        <link href="iconos.css" rel="stylesheet" />
        <link href="botones.css" rel="stylesheet" />
        <link href="menu3.css" rel="stylesheet" />

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
                  
                    <!-- <h2 class="masthead-subheading mb-0">Hola!</h2> -->
             
                </div>
            </div>
            <div class="bg-circle-1 bg-circle"></div>
            <div class="bg-circle-2 bg-circle"></div>
            <div class="bg-circle-3 bg-circle"></div>
            <div class="bg-circle-4 bg-circle"></div>
        </header style =padding-buttom:100px;>
        <div class="menu">
  <input type="checkbox" id="menu-toggle" />
  <label for="menu-toggle" class="menu-icon">Menú &#9776;</label>
  <ul>
    <li><a href="aprobar_solicitudes.php" class="btn btn-link" role="button"> Aprobar turno </a> </li>
    <li><a href="asignar_permisos.php" class="btn btn-link" role="button"> Asignar permisos </a></li>
    <li><a href="crearusuario_admin.php" class="btn btn-link" role="button"> Agregar usuario </a> </li>
    <li><a href="pdf_listado_usuarios.php" class="btn btn-link" role="button"> Crear pdf de usuarios </a> </li>
    <li> <a href="administrador.php" class="btn btn-link" role="button"> Volver atrás</a></li> 
  </ul>
</div>



<?php
    echo "</br></br>"
?>
<?php
class Usuario
{
    public function listar()
    {
        echo '<h2 style="font-size: 24px; font-weight: bold; text-align: center;"> ASISTENTES DE ENERGYM</h2>';
        include ("conexion.php");
        $sql = "SELECT * FROM usuarios";
        if(!$result = $db->query($sql)){
            die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
        }

        // inicio para tabla
        echo "<table style='border-collapse: collapse; width: auto; margin: 0 auto;'>";
        echo "<tr>";
        echo "<th style='border: 1px solid black;'>Nombres</th>";
        echo "<th style='border: 1px solid black;'>Apellidos</th>";
        echo "<th style='border: 1px solid black;'><span class='material-symbols-outlined actualizar'> update</span></th>";
        echo "<th style='border: 1px solid black;'> <span class='material-symbols-outlined borrar'> delete</span></th>";
        echo "</tr>";

        while ($row = $result->fetch_assoc()) {
            $nnombres = stripslashes($row["nombres"]);
            $aapellidos = stripslashes($row["apellidos"]);
            $ddocumento = stripslashes($row["documento"]);


            echo "<tr>";
            echo "<td style='border: 1px solid black; padding: 5px;'>$nnombres</td>";
            echo "<td style='border: 1px solid black; padding: 5px;'>$aapellidos</td>";
            echo "<td style='border: 1px solid black;'>";
            echo "<form name='etert' method='POST' action='actualizar_usuario.php' required>";
            echo "<input name='documento' type='hidden' value='$ddocumento'>";
            echo "<input type='submit' value='Actualizar'>";
            echo "</form>";
            echo "</td>";
            echo "<td style='border: 1px solid black;'>";
            echo "<form name='etert' method='POST' action='eliminando_usuario.php' required>";
            echo "<input type='checkbox' required>"; echo" ";
            echo "<input name='documento' type='hidden' value='$ddocumento'>";
            echo "<input type='submit' value='Eliminar'>";
            echo "</form>";
            echo "</td>";
            echo "</tr>";
        } // fin de tabla
        echo "</table>";
    }//Fin de método
}//Fin de clase

$final= new Usuario();
$final->listar();

?>

</br></br>


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
