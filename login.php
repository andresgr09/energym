
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="login1.css">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="modal1.css">
    <link rel="icon" type="image/x-icon" href="assets/favicon.png" />
    <title>Iniciar Sesión</title>
</head>
<body>
    

<header class="masthead text-center text-white" style="z-index: index 2;">
  <div class="masthead-content">
    <div class="container px-5">
      <div class="header-content">
       
      </div>
      <div class="form-container">
        <div class="contenedor">
          <h2>Iniciar Sesión</h2>
          <form action="evaluar.php" method="post" autocomplete="off">
            <div class="elemento">
              <label>Número de documento</label>
              <input type="text" id="usuario" name="documento" required  pattern="[0-9]+"/>
            </div>
            <div class="elemento">
              <label>Contraseña</label>
              <input type="password" name="password" required/>
            </div>
            <div class="elemento">
              <input type="submit" value="Ingresar" />
              <div class="elemento">
                <a class="text-reg" link href="crear_usuario.php">
                  <p >¿No está registrado? REGÍSTRESE</p>
                </a>
                
              </div>
            </div>
          </form>
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