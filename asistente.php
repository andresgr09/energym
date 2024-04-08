<?php
include("seguridad_usuario.php");
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
        
        <header class="masthead text-center text-white overflow-hidden"  background-image:administrador.jpg>
                <div class="masthead-content ">
                <div class="container px-5">
                    <h2 class="masthead-subheading mb-0">Bienvenido a las funciones de asistente</h2>
                </div>
            </div>
       

            
        </header>
        <!-- Content section 1-->
        <section class="page-section portfolio" id="portfolio">
           <div class="container"><br>
                <!-- Portfolio Section Heading-->
                
                <h4 class="page-section-heading text-center text-dark mb-0">Tareas</h4><br><br>
               
                <div>
          
       
               
               
                <style>
		/* Estilos para la ventana modal */
		.modal {
			display: none; /* Oculta la ventana modal por defecto */
			position: fixed; /* Posiciona la ventana modal en la pantalla */
			z-index: 1; /* Asegura que la ventana modal se muestre por encima del contenido */
			left: 0;
			top: 0;
			width: 100%;
			height: 100%;
			overflow: auto; /* Agrega un scroll a la ventana modal */
			background-color: rgba(0,0,0,0.4); /* Agrega un fondo oscuro detrás de la ventana modal */
		}

		/* Estilos para el contenido de la ventana modal */
		.modal-content {
			background-color: #fefefe;
			margin: 15% auto;
			padding: 20px;
			border: 1px solid #888;
			width: 40%;
		}
        .close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
   
  }
  
  .close:hover,
  .close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
  }
	</style>
</head>
<body>

	<!-- Botón para abrir la ventana modal -->
    <div class="button">
    <a href="registrar_asistencia.php" class="btn btn-link"> Reservar turno </a> 
               
	 <a onclick="document.getElementById('modal').style.display='block'" class="btn btn-link"> Mis solicitudes</a>
    </div>
	<!-- La ventana modal -->
	<div id="modal" class="modal">

<?php
$documento=$_SESSION["documento"];
?>


		<!-- Contenido de la ventana modal -->
		<div class="modal-content">
        <span class="close">&times;</span>
			<h2>Documento:</h2> <?php echo $documento;?> 
			<form action="mis_solicitudes.php" method="POST" required >
				<input type="hidden" name="documento" value='<?php echo $documento;?>' >
				<!--<button type="submit" class="btn btn-primary btn-Ig">Buscar</button>-->
                <button type="submit" class="btn btn-link">Buscar</button>
               
           <script>
var span = document.getElementsByClassName("close")[0];
span.onclick = function() {
  modal.style.display = "none";
}

</script>
			</form>
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
