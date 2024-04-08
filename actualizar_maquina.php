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
        <title>Actualizar máquina</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="estilos.css" rel="stylesheet" />
        <link href="form.css" rel="stylesheet" />
    </head>
    <body id="page-top">
  
<?php
include ("menu_usuarios.php")
?>

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
  
</head>
<body>
  <H1 style="text-align:center;">Actualizar máquina</H1>
  
<?php
class Maquina{
    public function actualizar_maquina($id_maquina)
    {
        include ("conexion.php");
        $sql = "SELECT * FROM maquinas WHERE id_maquina='$id_maquina'";
if(!$result = $db->query($sql)){
  die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
}
while($row = $result->fetch_assoc())
{
   
  
        $iid_maquina = stripslashes($row["id_maquina"]);
        $ccodigo_maquina = stripslashes($row["codigo_maquina"]);
        $mmaquina = stripslashes($row["maquina"]);
        $ffk_marca = stripslashes($row["fk_marca"]);
        $ffk_categoria = stripslashes($row["fk_categoria"]);
        $ffk_estado = stripslashes($row["fk_estado"]); 
}
    echo "<form name='etert' method='POST' action='actualizando_maquina.php' autocomplete='off'>";
    echo "<input name='id_maquina' type='hidden' value='$id_maquina'>";
    echo "<label>Codigo maquina:</label> <input name='codigo_maquina' type='text' value='$ccodigo_maquina'placeholder='Ingrese el código de la máquina'>";echo "<br/>";
        echo "<label>Maquina:</label> <input name='maquina' type='text' value='$mmaquina' placeholder='Ingrese el nombre de la máquina'>";echo "<br/>";
        echo "<label>Marca referencia:</label>"; 
        echo "<select name='fk_marca' required>";
         echo "<option value=''>Seleccione:</option>";
    $sql ="SELECT * FROM marcas";
    if(!$result = $db->query($sql)){
        die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
      }
      while($row = $result->fetch_assoc())
      {
         $ccod_marca=stripslashes($row["cod_marca"]);
        $mmarca=stripslashes($row["marca"]);
    echo"<option value='$ccod_marca'>$mmarca</option>";

      }

    echo"</select>";
    echo"</br>";

    echo"<label>Categoria:</label>";
    echo "<select name='fk_categoria' required>";
    echo "<option value=''>Seleccione:</option>";
    $sql ="SELECT * FROM categorias_maquinas";
    if(!$result = $db->query($sql)){
        die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
      }
      while($row = $result->fetch_assoc())
      {
         
        $ccategoria_maquina=stripcslashes($row["categoria_maquina"]);
         $ccod_categoria=stripslashes($row["cod_categoria"]);
       
    echo"<option value='$ccod_categoria'>$ccategoria_maquina</option>";

      }
      echo"</select>";
      echo"</br>";
    echo"<label>Estado</label>";
    echo "<select name='estado' required>";
    echo "<option value=''>Seleccione:</option>";
    $sql ="SELECT * FROM estados";
    if(!$result = $db->query($sql)){
        die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
      }
      while($row = $result->fetch_assoc())
      {
        
        $eestado=stripcslashes($row["estado"]);
         $ccod_estado=stripslashes($row["cod_estado"]);
       
    echo"<option value='$ccod_estado'>$eestado</option>";

      }
    
    echo"</select></br></br>";
    echo "<input type='submit' value='Actualizar' class='btn btn-primary'>";
    echo "</form></br></br>";
  
    // echo "Categoria: <input name='fk_categoria' type='text' value='$ffk_categoria'>";echo "<br/>";
    // echo "Estado: <input name='fk_estado' type='text' value='$ffk_estado'>";echo "<br/>";
    
    }
}

$final= new Maquina();
$final->actualizar_maquina($_POST["codigo_maquina"]);
?>

<p> <a href="javascript:history.back()" class="btn btn-primary btn-Ig" role="button"> volver atras </a> </p>


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
