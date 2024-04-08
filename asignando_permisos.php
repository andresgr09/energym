<?php
class Usuario{

    public function asignando_rol($documento,$fk_id_rol){
        $existe="0";
        include("conexion.php");
                $sql = "SELECT * FROM permisos WHERE documento='$documento' AND fk_id_rol='$fk_id_rol'";
if(!$result = $db->query($sql)){
  die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
}
while($row = $result->fetch_assoc())
{
	$ddocumento=stripslashes($row["documento"]);
    $fk_id_rol=stripcslashes($row["fk_id_rol"]);
    $existe=$existe+1;
			
}
    if ($existe=="0")
    {
                include ("conexion.php");
                mysqli_query($db,"INSERT INTO permisos (id_permiso, documento, fk_id_rol) VALUES 
(NULL, '$documento', '$fk_id_rol')") or die(mysqli_error($db));
echo "Permiso registrado correctamente";
}
if ($existe!="0")
{
            
echo "<h3>¡El permiso ya existe!</h3>";

echo "<br/>";
echo"<div class='text-formulario1'>"; 
echo "<a href='administrador.php'>Regresar al administrador</a>";
echo"</div>";
}



   }
 }

$final= new Usuario();
$final->asignando_rol($_POST["documento"],$_POST["fk_id_rol"]);
?>