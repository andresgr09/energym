<!DOCTYPE html>
<html lang="eS">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/favicon.png" />
    <link rel="stylesheet" href="iconos.css">
    <title>Usuarios</title>
</head>
<body>
    
<h1> Usuarios Energym</h1>
<?php
include("seguridad_admin.php");
include ("conexion.php");
/*class Usuario{
    public function pdf(){*/
$sql = "SELECT * FROM usuarios";
if(!$result = $db->query($sql)){
  die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
}
echo "<table border='1' class='table-pdf'>";
echo "<tr>";
echo "<th>";
echo "Documento";
echo "</th>";
echo "<th>";
echo "Usuario";
echo "</th>";
echo "<th>";
echo "Permiso";
echo "</th>";

echo "<tr>";

while($row = $result->fetch_assoc())
{
   
	$aapellidos=stripslashes($row["apellidos"]);
    $nnombres=stripslashes($row["nombres"]);
    $ddocumento=stripslashes($row["documento"]);
    echo "<tr>";
    echo "<td>";
    echo $ddocumento; 
    echo "</td>";
    
    echo "<td>";
    echo "$aapellidos"; echo " ";
    echo"$nnombres"; 
    echo "</td>";

    echo "<td>";
    //echo "permiso"; 
    $sql2 = "SELECT * FROM permisos WHERE documento='$ddocumento'";
if(!$result2 = $db->query($sql2)){
  die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
}
while($row2 = $result2->fetch_assoc())
{
   	$ffk_id_rol=stripslashes($row2["fk_id_rol"]);
    //echo $ffk_id_rol;

    ///////subconsulta
$sql3 = "SELECT * FROM roles WHERE id_rol='$ffk_id_rol'";
if(!$result3 = $db->query($sql3)){
  die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
}
while($row3 = $result3->fetch_assoc())
{
   	$rrol=stripslashes($row3["rol"]);
     echo $rrol; echo "<br/>";
}  
///////subconsulta  

}

    
    echo "</td>";




    echo "</tr>";
}
echo "</table>";
echo "<a href='javascript:window.print(); void 0;' style='color:#006666'>Imprimir o Generar PDF</a>";
/*}
}
$final= new Usuario();
$final->pdf();*/
?>
</body>
</html>