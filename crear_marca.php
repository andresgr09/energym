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
        <title>Crear categoria</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="estilos.css"  />
        <link rel="stylesheet" href="form.css" />
        <link rel="stylesheet" href="botones.css">
        <link rel="stylesheet" href="modal1.css">
        <script defer src="modal.js"></script>
       
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
                  
                    <h2 class="masthead-subheading mb-0">Hola!</h2>
             
                </div>
            </div>
            <div class="bg-circle-1 bg-circle"></div>
            <div class="bg-circle-2 bg-circle"></div>
            <div class="bg-circle-3 bg-circle"></div>
            <div class="bg-circle-4 bg-circle"></div>
        </header style =padding-buttom:100px;>
  
                            <?php
                            echo"</br></br> ";?>



        <h1 style="text-align:center;">Crear nueva marca</h1 >


        <form action="creando_marca.php" method="POST" autocomplete="off">
  <label for="nombre">Código marca:</label>
  <input type="text" id="nombre" name="cod_marca" placeholder="Ingrese el código de la nueva marca" required pattern="[A-Za-z0-9]+">
  
  <label for="l">Nombre marca:</label>
  <input type="text"  name="marca" placeholder="Ingrese el nombre de la marca " required pattern="[A-Za-z0-9AÉÍÓÚ áéíóú ]+">
  
  
  <br/><input type="submit" name="" value='Crear' class='boton-enviar'>
</form>
    </form>
 

<br><br>
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