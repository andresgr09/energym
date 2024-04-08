
<!-- //  require_once("seguridad.php");
  // session_start();  -->

  <!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link href="menu.css" rel="stylesheet" />
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0' />
    
   
</head>
<body>

<?php

    
    echo "<nav class='menu'>";
echo "    <img src='images/migracion_logo.png' alt='Logo' class='logo'>";
if(isset($_SESSION['nombre_usuario']) && !empty($_SESSION['nombre_usuario'])) {
  $nombreUsuario = $_SESSION['nombre_usuario'];
  echo "    <div class='bienvenido'>";
  echo "        <p>¿Que desea hacer hoy?, $nombreUsuario</p>";
  } 
  echo "    </div>";
  echo "<a href='salir.php' class='logout' >Cerrar Sesión <span class='material-symbols-outlined align-middle logout-icon'>logout</span></a>";
  echo " </nav>";


?>
</body>
</html>

