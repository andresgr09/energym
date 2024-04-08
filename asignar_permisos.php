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
        <title>Permisos </title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
      
        <link href="estilos.css" rel="stylesheet" />
        <link href="form.css" rel="stylesheet" />
        <link href="botones.css" rel="stylesheet" />
        <script defer src="modal.js"></script>
        <link rel="stylesheet" href="modal1.css">
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
            </div>
        </nav>
        <!-- Header-->
        <header class="masthead text-center text-white" style="
    padding-top: 100px;
    padding-bottom: 100px;
">
            <div class="masthead-content">
                <div class="container px-5">
                    <h1 class="masthead-heading mb-0" style="margin-top: 40px;">Bienvenido<a class='nav-link' ></a></h1> 

                
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
                            <h1 class="display-4" style=" text-align:center;">Asignación de roles</h1>
                                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--formulario style=" width:auto; margin:100px auto ;"  -->
  <div class="roles">     

  <?php


echo "<form name='' action='asignando_permisos.php' method='POST'>";
echo "<label>Usuario</label>"; 
echo "<select name='documento' required>";
echo "<option value=''>Seleccione:</option>";

class Usuario{
    public function asignar_rol(){
        include ("conexion.php");
        $sql = "SELECT * FROM usuarios";
        if(!$result = $db->query($sql)){
          die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
        }
        
        
        
        while($row = $result->fetch_assoc())
        {
           
            
            $aapellidos=stripslashes($row["apellidos"]);
            $nnombres=stripslashes($row["nombres"]);
            $ddocumento=stripslashes($row["documento"]);
            echo "<option value='$ddocumento'> $nnombres $aapellidos</option>";
        
        
            
           
        }
        echo "</select>";
        
        echo "<br/>";echo "<br/>";echo "<br/>";
        echo "<label>Seleccione Rol:</label>";
      
       
        echo "<select name='fk_id_rol' required>";
        echo "<option value=''>Seleccione:</option>";
        $sql = "SELECT * FROM roles";
        if(!$result = $db->query($sql)){
          die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
        }
        while($row = $result->fetch_assoc())
        {

            $iid_rol=stripslashes($row["id_rol"]);
            $rrol=stripslashes($row["rol"]);
            echo "<option value='$iid_rol'>$rrol</option>";
        }    
        echo "</select>";
        
        echo "<br/>";echo "<br/>";
        echo "<input type='submit' value='Asignar permiso' class='boton-enviar'>";
        
        
        
        echo "</form></br>";

    }
}
$final= new Usuario();
$final->asignar_rol();

?>
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
