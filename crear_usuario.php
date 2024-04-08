
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login1.css">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="modal1.css">
    <script defer src="modal.js"></script>
        <link rel="stylesheet" href="modal1.css">
    <link rel="icon" type="image/x-icon" href="assets/favicon.png" />
    <title>Crear Usuario</title>
</head>
<body>
    

<header class="masthead text-center text-white" style="z-index: index 2;">
  <div class="masthead-content">
    <div class="container px-5">
      <div class="header-content">
       
      </div>
      <div class="form-container">
        <div class="contenedor">
          <h2>Crear cuenta</h2>
          <form action="creando_usuario.php" method="post" autocomplete="off">
          <div class="elemento">
              <label>Nombres</label>
              <input type="text" name="nombres" pattern="[A-ZÑÁÉÍÓÚáéíóú a-z]+" required />
            </div>
            <div class="elemento">
              <label>Apellidos</label>
            <input type="text"  name="apellidos" pattern="[A-ZÑÁÉÍÓÚa-z ]+"required />
            </div>
            <div class="elemento">
              <label>Número de documento</label>
              <input type="text" name="documento" pattern="[0-9 ]+" required />
            </div>
            <div class="elemento">
              <label>Contraseña</label>
              <input type="password" name="password" pattern="[A-ZÑÁÉÍÓÚa-z0-9 ]+" required />
            </div>
            <div class="elemento">
              <input type="submit" value="Registrar" />
              <div class="elemento">
                <a link href="login.php" class="text-login">
                  <p> ¿Tiene cuenta? Inicie sesión</p>
                  </a>


  </div>
</div>        
              </div>
            </div>
          </form>
          <div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <p id="respuesta"></p>
  </div>
</div>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-circle-1 bg-circle"></div>
  <div class="bg-circle-2 bg-circle"></div>
  <div class="bg-circle-3 bg-circle"></div>
  <div class="bg-circle-4 bg-circle"></div>
  <div class="bg-circle-5 bg-circle"></div>
</header>
</body>
</html>