<?php
session_start();
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
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
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
       
        <header class='masthead text-center text-white'>
            <div class='masthead-content'>
                <div class='container px-5'>
                    
                 <h2>Mis permisos</h2>
                   

                    
                        </div>
           </div> 
            <div class='bg-circle-1 bg-circle'></div>
           <div class='bg-circle-2 bg-circle'></div>
            <div class='bg-circle-3 bg-circle'></div>
           <div class='bg-circle-4 bg-circle'></div>
       </header>
      
                      
        </div>    
        <?php
            class Usuario{
                public function mis_permisos(){
                    $documento=$_SESSION["documento"];
                  
                    include ("conexion.php");
                     $sql2 = "SELECT * FROM permisos WHERE documento='$documento'";
                     if(!$result2 = $db->query($sql2)){
                       die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
                     }
                     while($row2 = $result2->fetch_assoc())
                     {
                         $ffk_id_rol=stripslashes($row2["fk_id_rol"]);
                         $ddocumento=stripslashes($row2["documento"]);
                      
                        
                         if ($ffk_id_rol=="1")
                         {
                            $_SESSION["usuario"]="1";
                            
                             echo "<div class='textos'> ";
                             echo "Usted es ASISTENTE";echo "<span class='material-symbols-outlined person' style='font-size: 30px;'> person_pin</span> </br>";
                         echo "<a href='asistente.php' >Ir al ASISTENTE </br> </a>";
                      
                         }
                         if ($ffk_id_rol=="2")
                         {
                            $_SESSION["administrador"]="1";            
                             echo "Usted es ADMINISTRADOR";echo "<span class='material-symbols-outlined admin' style='font-size: 30px;'> settings_account_box</span> <br/>";
                             
                             echo "<a href='administrador.php'>Ir al ADMIN</a>";
                             echo "</div>";
                         }
                      }
             
                }
            }
            $final= new Usuario();
            $final->mis_permisos();     

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
        <?php
      

        ?>



    </body>
</html>
