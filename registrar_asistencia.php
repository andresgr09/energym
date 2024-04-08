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
        <!-- Core theme CSS (includes Bootstrap)-->
      
        <link href="estilos.css" rel="stylesheet" />
        <link href="form.css" rel="stylesheet" />   
        <link rel="stylesheet" href="modal1.css">
        <link href="botones.css" rel="stylesheet" />
        <link href="iconos.css" rel="stylesheet" />
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
       <header class="masthead text-center text-white" style="padding-top: 100px; padding-bottom: 100px;">
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
                           
                                        </div>
                    </div>
                </div>
            </div>
        </section>
        <h1 style="text-align:center;">Agenda tu asistencia</h1>
        <!--formulario -->
  <div>     
<form action="registrando_asistencia.php" method="POST" autocomplete="off" >
    <label for=""> Fecha:</label> 
    <input type="date" name="fecha" id="" required> 
    <label for="">Elegir hora: </label> 
<select name="hora" id="" required>
  <option value="">Seleccionar</option>
  <option value="6">6:00am </option>
  <option value="7">7:00am </option>
  <option value="8">8:00am  </option>
  <option value="9">9:00am  </option>
  <option value="10">10:00am  </option>
  <option value="11">11:00am  </option>
  <option value="12 ">12:00pm  </option>
  <option value="13">1:00pm  </option>
  <option value="14">2:00pm  </option>
  <option value="15">3:00pm  </option>
  <option value="16">4:00pm  </option>
  <option value="17">5:00pm  </option>
  <option value="18">6:00pm  </option>
  
</select></br>

</br>
    <input type="submit"value="enviar" class="boton-enviar">   <br>
   <p> ¡Recuerde que de ser aprobada su reserva, <br>
    el tiempo máximo de entrenaminetnto será de 2 horas!</p>

    
</form>
<br>
</div>   
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
