<?php
include("seguridad_admin.php");
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
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="estilos.css" rel="stylesheet" />
        <link href="botones.css" rel="stylesheet" />
    </head>
    <body id="page-top">
     
<?php
include ("menu_usuarios.php")
?>

            </div>
        </nav>
       
        <header class="masthead text-center text-white"  background-image:administrador.jpg>
                <div class="masthead-content">
                <div class="container px-5">
                    <h2 class="masthead-subheading mb-0">Bienvenido Administrador</h2>
                </div>
            </div>
       

            
        </header>
        <!-- Content section 1-->
        <section class="page-section portfolio" id="portfolio">
           <div class="container"><br>
                <!-- Portfolio Section Heading-->
                <h4 class="page-section-heading text-center text-dark mb-0">Módulos</h4><br><br>
               
                <div class="button">
                <p> <a href="listar_usuarios.php" class="btn btn-link" role="button"> Asistentes </a> </p>
                
                <p> <a href="inventario.php" class="btn btn-link" role="button"> Inventario </a> </p>
               
               
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
