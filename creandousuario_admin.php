<?php
include("seguridad_admin.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" type="image/x-icon" href="assets/favicon.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>
<body>
  

<?php
class Usuario{
   
        public function crear($nombres,$apellidos,$documento,$password)
      
        {
          include("conexion.php");
                      $existe="0";
                      $sql = "SELECT * FROM usuarios WHERE documento='$documento'";
      if(!$result = $db->query($sql)){
        die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error. ']');
      }
      while($row = $result->fetch_assoc())
      {
          $ddocumento=stripslashes($row["documento"]);
          $existe=$existe+1;
                  
      }
          if ($existe=="0")
          {
                      include ("conexion.php");
                      mysqli_query($db,"INSERT INTO usuarios (id_usuario, nombres, apellidos,documento, password) VALUES 
      (NULL, '$nombres','$apellidos', '$documento','$password')") or die(mysqli_error($db));
      
      $fk_id_rol="1";
      mysqli_query($db,"INSERT INTO permisos (id_permiso, documento, fk_id_rol  ) VALUES 
      (NULL, '$documento','$fk_id_rol')") or die(mysqli_error($db));
      echo "<h3>Usuario registrado correctamente</h3> </br> "; 
      echo"<div class='text-formulario1'>"; 
      echo "<a href='administrador.php' class='text-form'>volver al inicio</a>";
      echo"<div>";
      }
      if ($existe!="0")
      {
        echo"<div class='text-formulario1'>"; 
      echo "<h3>¡El usuario ya existe! puede </h3></br> ";
      echo "<a href='crearusuario_admin.php' class='text-form'>volver a intentar</a>";
      echo"<div>";
      }
        }
      }
       $final= new Usuario();
       $final -> crear($_POST["nombres"],$_POST["apellidos"],$_POST["documento"],$_POST["password"]);
          
      
    
                ?>
                </body>
</html>
