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

      echo "<h3 class='text-true'>Usuario registrado correctamente</h3> </br> "; 
      echo"<div class='text-formulario'>";
      echo "<a href='login.php'>Puede iniciar sesión</a>";
      echo"</div>";
      }
      if ($existe!="0")
      {
        
      echo "<h3 class='text-true'>¡El usuario ya existe! puede</h3>";
      echo"<div class='text-formulario1'>"; 
      echo "<a href='crear_usuario.php'>volver a intentar</a>";
      echo"</div>";
      
      }
        }
      }
       $final= new Usuario();
       $final -> crear($_POST["nombres"],$_POST["apellidos"],$_POST["documento"],$_POST["password"]);
          
      
    
                ?>