<?php
    class Maquina{
    
          public function crear_categoria($cod_categoria,$categoria_maquina)
          {
              include("conexion.php");
              $existe="0";
              $sql = "SELECT * FROM categorias_maquinas where cod_categoria ='$cod_categoria'";
              if(!$result = $db->query($sql)){
                  die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error. ']');
                }
                while($row = $result->fetch_assoc())
                {
                    $ccod_categoria=stripslashes($row["cod_categoria"]);
                  
                    $existe=$existe+1;
                  }
                  if ($existe=="0")
                  {
                              include ("conexion.php");
                              mysqli_query($db,"INSERT INTO categorias_maquinas (id_categoria_maquina, cod_categoria, categoria_maquina) VALUES 
              (NULL, '$cod_categoria','$categoria_maquina' )") or die(mysqli_error($db));
              echo "<h3 class='text-true'>Categoría registrada correctamente</h3> </br> "; 
               echo"<div class='text-formulario1'>";
               echo "<a href='inventario.php'>Ir a inventario</a>";
               echo"</div>";
          }
          if ($existe!="0")
          {
                          
              echo "<h3>¡La categoría ya existe!</h3>";
    echo"<div class='text-formulario1'>";
    echo "<a href='crear_categoria.php'>Volver a intentar</a></br>";
    echo "<a href='inventario.php'>Ir a inventario</a>";
    echo"</div>";

              }
                }
              }
                
    $final = new Maquina();
    $final -> crear_categoria($_POST["cod_categoria"],$_POST["categoria_maquina"]);
      
  
  
  ?>


