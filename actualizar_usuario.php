



<!DOCTYPE html>

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
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="estilos.css" rel="stylesheet" />
        <link href="form.css" rel="stylesheet" />
        <link href="botones.css" rel="stylesheet" />
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
  
                            
        
  <H1 style="text-align:center;">Actualizar Usuario</H1>

<?php
class Usuario{
    public function actualizar_password($documento)
    {
        $mysqli = new mysqli('localhost', 'root', '', 'oracleproyect');
        
        $sql = "SELECT * FROM usuarios WHERE documento='$documento'";
if(!$result = $db->query($sql)){
  die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
}
while($row = $result->fetch_assoc())
{
   
       
        $ppassword = stripslashes($row["password"]);
   
}



    echo"<form method='POST' action='contraseña_actualizando.php' autocomplete='off'>";
   
   
    echo"<label>Password:</label>";
    echo"<input name='password' type='password' pattern='[A-Za-z0-9]+' placeholder='Ingrese nueva contraseña para el usuario' required>";
    echo "<input type='submit' value='Actualizar' class='boton-enviar'>";
    echo"</form> </br>";

    }
}

$final= new Usuario();
$final->actualizar_password($_POST["password"]);
?>


<div class="botonf">
 <a href="javascript:history.back()"  > Volver atrás </a>  
</div> 

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
