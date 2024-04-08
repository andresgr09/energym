<?php
include("seguridad_admin.php");
?>
<?php
class Maquinas{
    public function crear_estado($cod_estado, $estado){
       
        
            include("conexion.php");
            $existe="0";
            $sql = "SELECT * FROM estados where cod_estado ='$cod_estado'";
            if(!$result = $db->query($sql)){
                die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error. ']');
              }
              while($row = $result->fetch_assoc())
              {
                  $ccod_categoria=stripslashes($row["cod_estado"]);
                
                  $existe=$existe+1;
                }
                if ($existe=="0")
                {
                            include ("conexion.php");
                            mysqli_query($db,"INSERT INTO estados (id_estado, cod_estado, estado) VALUES 
            (NULL, '$cod_estado','$estado' )") or die(mysqli_error($db));
               echo "<h3 class='text-true'>Estado registrado correctamente</h3> </br> "; 
               echo"<div class='text-formulario1'>";
               echo "<a href='inventario.php'>Ir a inventario</a>";
               echo"</div>";
        }
        if ($existe!="0")
        {
                        
          echo "<h3>¡El estado ya existe!</h3>";
    echo"<div class='text-formulario1'>";
    echo "<a href='crear_estado.php'>Volver a intentar</a></br>";
    echo "<a href='inventario.php'>Ir a inventario</a>";
    echo"</div>";

            
            }
              }
            }


$final= new Maquinas();
$final->crear_estado($_POST["cod_estado"],$_POST["estado"]);


?>