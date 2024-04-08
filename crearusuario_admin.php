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
        <title>Crear usuario</title>
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
<div class="">


        <h1 style="text-align:center;">Crear Usuario</h1 >


        <form action="creandousuario_admin.php" method="POST" autocomplete="off">
  <label for="nombre">Nombre(s):</label>
  <input type="text"  name="nombres" placeholder="Ingrese el nombre del nuevo usuario" required pattern="[A-Za-zÁÉÍÓÚaéíóú ]+">
  <label for="nombre">Apellido(s):</label>
  <input type="text"  name="apellidos" placeholder="Ingrese el apellido del nuevo usuario" required pattern="[A-Za-zÁÉÍÓÚaéíóú ]+">
  <label for="nombre">Número de documento:</label>
  <input type="text"  name="documento" placeholder="Ingrese el documento del nuevo usuario" required pattern="[0-9]+">
  <label for="l">Contraseña</label>
  <input type="password"  name="password" placeholder="Ingrese la contraseña del nuevo suaurio " required pattern="[A-Za-z0-9AÉÍÓÚ áéíóú ]+">
  <br/><input type="submit" name="" value='Crear' class='boton-enviar'>
</form>
    </form>
    </div>
<br><br>


        </div>
                    </div>
                </div>
            </div>
        </section>
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
