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
        <title>Crear máquinas </title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="estilos.css" rel="stylesheet" />
        <link href="form.css" rel="stylesheet" />     
        <link  href="modal1.css" rel="stylesheet">
        <script defer src="modal.js"></script>
        <link href="botones.css" rel="stylesheet" />
    </head>
    <body id="page-top">
  
<?php
include ("menu_usuarios.php")
?>
<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <p id="respuesta"></p>
  </div>
</div>

            </div>
        </nav>
        <!-- Header-->
        <header class="masthead text-center text-white">
            <div class="masthead-content">
                <div class="container px-5">
                    <h1 class="masthead-heading mb-0">Bienvenido<a class='nav-link' ></a></h1> 

                
                </div>
            </div>
            <div class="bg-circle-1 bg-circle"></div>
            <div class="bg-circle-2 bg-circle"></div>
            <div class="bg-circle-3 bg-circle"></div>
            <div class="bg-circle-4 bg-circle"></div>
        </header>
        <!-- Content section 1-->
        <section id="scroll">
            <div class="container px-5">
               
                       
                        <div class="p-5">
                            <h1  style=" text-align:center;">Crear máquina</h1>
                                        </div>
                    </div>
                </div>
            </div>
        </section>
       
<form action="creando_maquina.php" method="POST" autocomplete="off">
                <label for="">Código de máquina:</label> 
                 <input type="text" name="codigo_maquina" placeholder="Ingrese el código de la máquina" required pattern="[A-Za-z0-9 ]+" > 
                 <label for="">Nombre máquina:</label>   
                 <input type="text" name="maquina" placeholder="Ingrese el nombre de la máquina" required pattern="[A-Za-z0-9AÉÍÓÚ áéíóú ]+"><br/>
                 
    <?php
        class Maquina{
                public function crear_maquina(){
                        include("conexion.php");
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
                    
                        echo"</select></br>";
                         

                        //////// consulta
                        echo"<label>Categoria:</label>";
    echo "<select name='fk_categoria' required>";
    echo "<option value=''>Seleccione:</option>";
    $sql ="SELECT * FROM categorias_maquinas";
    if(!$result = $db->query($sql)){
        die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
      }
      while($row = $result->fetch_assoc())
      {
   
         $ccod_categoria=stripslashes($row["cod_categoria"]); 
         $ccategoria_maquina=stripcslashes($row["categoria_maquina"]);
       
       
    echo"<option value='$ccod_categoria'>$ccategoria_maquina</option>";

      }
      echo"</select></br>";
     
///////// fin de consulta

    echo"<label>Estado: </label>";
    echo "<select name='fk_estado' required>";
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
    
    echo"</select><br>";
  

                }
        }
        $final= new Maquina();
$final->crear_maquina();

    ?>     
                                        
                    <br/><input type="submit" name="" value='Crear Máquina' class='boton-enviar'>
                </form>        
		
                
                </div>   </br> </br>
                <div class="botonf">
 <a href="javascript:history.back()"  > Volver atrás </a>  
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
