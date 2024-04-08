<?php
    class Maquina{
    
          public function crear_marca($cod_marca,$marca)
          {
              include("conexion.php");
              $existe="0";
              $sql = "SELECT * FROM marcas where cod_marca ='$cod_marca'";
              if(!$result = $db->query($sql)){
                  die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error. ']');
                }
                while($row = $result->fetch_assoc())
                {
                    $ccod_marca=stripslashes($row["cod_marca"]);
                    $mmarca=stripcslashes($row["marca"]); // Se agregó el punto y coma aquí
                    $existe=$existe+1;
                  }
                  if ($existe=="0")
                  {
                              include ("conexion.php");
                              mysqli_query($db,"INSERT INTO marcas (id_marca, cod_marca, marca) VALUES 
              (NULL, '$cod_marca','$marca' )") or die(mysqli_error($db));
              echo "<h3 class='text-true'>!Marca registrada correctamente¡</h3> </br> "; 
              echo"<div class='text-formulario1'>";
              echo "<a href='inventario.php'>Ir a inventario</a>";
              echo"</div>";
          }
          if ($existe!="0")
          {
                          
            echo "<h3>¡La marca ya existe!</h3>";
            echo"<div class='text-formulario1'>";
            echo "<a href='crear_marca.php'>Volver a intentar</a></br>";
            echo "<a href='inventario.php'>Ir a inventario</a>";
            echo"</div>";
        
              
              }
                }
              }
                
    $final = new Maquina();
    $final -> crear_marca($_POST["cod_marca"],$_POST["marca"]);
      
  
  
  ?>


