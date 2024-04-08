<?php
include("seguridad_admin.php");
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/x-icon" href="assets/favicon.png" />
	<title></title>
</head>
<body>
		<?php
			class Usuario
			{
				public function crear_maquina($codigo_maquina, $maquina, $fk_marca, $fk_categoria,$fk_estado){
					include ("conexion.php");

                    include("conexion.php");
                    $existe="0";
                    $sql = "SELECT * FROM maquinas WHERE codigo_maquina='$codigo_maquina'";
    if(!$result = $db->query($sql)){
      die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
    }
    while($row = $result->fetch_assoc())
    {
        $ccod_maquina=stripslashes($row["codigo_maquina"]);
        $existe=$existe+1;
                
    }
        if ($existe=="0")
        {
                    include ("conexion.php");
                    mysqli_query($db,"INSERT INTO maquinas (id_maquina, codigo_maquina, maquina, fk_marca, fk_categoria,fk_estado) VALUES 
                    (NULL, '$codigo_maquina', '$maquina', '$fk_marca', '$fk_categoria','$fk_estado')") or die(mysqli_error($db));
                      
                    echo "<h3>Maquina creada correctamente</h3>";
                    echo"<div class='text-formulario1'>";
                    echo "<a href='inventario.php'>Ir a inventario</a>";
                    echo"</div>";
                    }
    
    if ($existe!="0")
    {
        
    echo "<h3>¡El Código de la máquina ya existe!</h3>";
    echo"<div class='text-formulario1'>";
    echo "<a href='crear_maquina.php'>Volver a intentar</a></br>";
    echo "<a href='inventario.php'>Ir a inventario</a>";
    echo"</div>";


    }
				}
			}
    
			
$final= new Usuario();
$final->crear_maquina($_POST["codigo_maquina"],$_POST["maquina"],$_POST["fk_marca"],$_POST["fk_categoria"],$_POST["fk_estado"]);
		?>
</body>
</html>