<?php

ob_start();
// include("seguridad_admin.php");
?>



<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Energym </title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />

        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"/>
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="estilos.css" rel="stylesheet" />
        <link href="menu3.css" rel="stylesheet" />
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
                  
                    <h2 class="masthead-subheading mb-0">Administración de máquinas</h2>
             
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
    <li><a href="crear_maquina.php" class="btn btn-link" role="button"> Crear máquina </a> </li>
    <li><a href="crear_marca.php" class="btn btn-link" role="button"> Crear marca </a> </li>
    <li><a href="crear_categoria.php" class="btn btn-link" role="button"> Crear categoría </a>  </li>
    <li><a href="crear_estado.php" class="btn btn-link" role="button"> Crear estado </a>  </li>
    <li> <a href="administrador.php" class='btn btn-link' role="button"> Volver atrás </a></li> 
  </ul>
</div>

  
                            <?php
                            echo"</br></br>";
class Maquinas
{
    public function listar_maquinas()
    {
        
        echo "<h1 style=' text-align: center;'> Inventario</h1>";
        include ("conexion.php");
        $sql = "SELECT * FROM maquinas";
        if(!$result = $db->query($sql)){
            die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
        }

        // inicio para tabla
        echo "<table style='border-collapse: collapse; width: auto; margin: 0 auto;'>";
        echo "<tr>";
        // echo "<th style='border: 1px solid black;padding: 5px;'> Nro </th>";
        echo "<th style='border: 1px solid black;padding: 5px;'> Codigo máquina </th>";
        echo "<th style='border: 1px solid black;padding: 5px;'> Máquina </th>";
        echo "<th style='border: 1px solid black;padding: 5px;'> Marca o referencia </th>";
        echo "<th style='border: 1px solid black;padding: 5px;'> Categoría </th>";
        echo "<th style='border: 1px solid black;padding: 5px;'> Estado </th>";
        
        echo "<th style='border: 1px solid black;'><span class='material-symbols-outlined actualizar'> update</span></th>";
        echo "<th style='border: 1px solid black;'> <span class='material-symbols-outlined borrar'> delete</span></th>";
        echo "</tr>";

        while ($row = $result->fetch_assoc()) {
            $iid_maquina = stripslashes($row["id_maquina"]);
            $ccodigo_maquina = stripslashes($row["codigo_maquina"]);
            $mmaquina = stripslashes($row["maquina"]);

            $ffk_marca = stripslashes($row["fk_marca"]);
            ///////////////////////////////// inicio consulta marca
        //  echo "El cod Marca es: $ffk_marca";
            $sql2 = "SELECT * FROM marcas WHERE cod_marca='$ffk_marca'";
        if(!$result2 = $db->query($sql2)){
            die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
        }
        while ($row2 = $result2->fetch_assoc()) 
        {
            $mmarca = stripslashes($row2["marca"]);
        }


            ///////////////////////// fin consulta marca

            $ffk_categoria = stripslashes($row["fk_categoria"]);
            //////////////////// inicio consulta categoria 
            
            $sql3 = "SELECT * FROM categorias_maquinas WHERE cod_categoria='$ffk_categoria'";
        if(!$result3 = $db->query($sql3)){
            die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
        }
        while ($row3 = $result3->fetch_assoc()) 
        {
            $ccod_categoria = stripslashes($row3["categoria_maquina"]);
        }

            
            
            /////////////////// fin consulta categoria


            $ffk_estado = stripslashes($row["fk_estado"]);
            ////////////////////// inicio consulta estado

            $sql4 = "SELECT * FROM estados WHERE cod_estado='$ffk_estado'";
        if(!$result4 = $db->query($sql4)){
            die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
        }
        while ($row4 = $result4->fetch_assoc()) 
        {
            $ccod_estado = stripslashes($row4["estado"]);
        }

        ////////////////// fin de consulta estado 
            


            echo "<tr>";
            // echo "<td style='border: 1px solid black; padding: 5px;'>include('orden_maquinas.php')</td>";
            echo "<td style='border: 1px solid black; padding: 5px;'>$ccodigo_maquina</td>";
            echo "<td style='border: 1px solid black; padding: 5px;'>$mmaquina</td>";
            echo "<td style='border: 1px solid black; padding: 5px;'>$mmarca</td>";
            echo "<td style='border: 1px solid black; padding: 5px;'>$ccod_categoria</td>";
            echo "<td style='border: 1px solid black; padding: 5px;'>$ccod_estado</td>";
            echo "<td style='border: 1px solid black;'>";
           
            echo "<form name='etert' method='POST' action='actualizar_maquina.php' required>";
            echo "<input name='codigo_maquina' type='hidden' value='$iid_maquina'>";
            echo "<input type='submit' value='Actualizar'>";
            echo "</form>";
            
            echo "</td>";
            echo "<td style='border: 1px solid black;'>";
            echo "<form name='etert' method='POST' action='eliminando_maquina.php' required>";
            echo "<input type='checkbox'  required>" ; echo" ";
            echo "<input name='id_maquina' type='hidden' value='$iid_maquina'>";
            echo "<input type='submit' value='Eliminar'>";
            echo "</form>";
            echo "</td>";
            echo "</tr>";
        } // fin de tabla
      
    }//Fin de método
}//Fin de clase

$final= new Maquinas();
$final->listar_maquinas();
?>





                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        
        <!-- Footer -->
            
         

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>

        <?php
            include ("footer.php");
            ?>
    </body>
</html>
