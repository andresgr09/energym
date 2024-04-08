<?php
session_start();
?>
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
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="estilos.css" rel="stylesheet" />
        <link href="textos.css" rel="stylesheet" />
        <link href="iconos.css" rel="stylesheet" />
    </head>
    <body id="page-top">
  
<?php
include ("menu_usuarios.php")
?>

<?php
    echo" </div>";
    echo" </nav>";
    echo"<header class='masthead text-center text-white'>";
    echo" <div class='masthead-content'>";
    echo"<div class='container px-5'>";
                    
                    class usuario{
                        public function evaluar($documento,$password)
                    //if ($suma=="3")
                    {//inicio metodo
                        $nnombres="sin registro";
                        $cont="0";
                        
                        include ("conexion.php");
                    $sql = "SELECT * FROM usuarios WHERE documento='$documento' AND password='$password'";
                    if(!$result = $db->query($sql)){
                    die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
                    }
                    while($row = $result->fetch_assoc())
                        {
                    //  "stripslashes" trae todo lo que encuentra en el campo
                        $nnombres=stripslashes($row["nombres"]);
                        $cont=$cont+1;	
                        if ($cont!="0");
                        {
                        echo "<h2 class='masthead-subheading mb-0'>Bienvenido(a)  $nnombres </h2></br>";  
                        
                        }
                        $_SESSION["usuario"]="1";
                        
                        $_SESSION["documento"]=$documento;
                    
                        echo"</div>";
                        echo"</div> ";
                        echo"<div class='bg-circle-1 bg-circle'></div>";
                        echo"  <div class='bg-circle-2 bg-circle'></div>";
                        echo" <div class='bg-circle-3 bg-circle'></div>";
                        echo" <div class='bg-circle-4 bg-circle'></div>";
                        echo" </header>";
                        } 
                        echo "<div class='textos'>";
                        echo "<h4>Conoce:<br/></h4>";
                        echo "<h5><a href='vista_permisos.php'> Tus permisos</a></h5>";
                    
                        if ($cont=="0")
                        {
                            echo "$nnombres";
                        echo "datos incorrectos";
                         header("location:no_existe.php");
                        } 
                    echo "</div>"; 
                        }//Fin de método
                    }//Fin de clase
                    $final= new Usuario();
                    $final->evaluar($_POST["documento"],$_POST["password"]);     

   ?>

                      
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
