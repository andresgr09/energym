 <!DOCTYPE html>
 <html>
 <head>
   <title> actualizando maquina</title>
 </head>
 <body>
 
 
 <?php
        class Maquina{
            public function actualizando_maquina($id_maquina,$codigo_maquina, $maquina, $fk_marca, $fk_categoria,$fk_estado){
            {

        
               include ("conexion.php");
               mysqli_query($db,"UPDATE maquinas SET codigo_maquina = '$codigo_maquina' WHERE id_maquina='$id_maquina'");
               mysqli_query($db,"UPDATE maquinas SET maquina = '$maquina' WHERE id_maquina='$id_maquina'");
               mysqli_query($db,"UPDATE maquinas SET fk_marca = '$fk_marca' WHERE id_maquina='$id_maquina'");
               mysqli_query($db,"UPDATE maquinas SET fk_categoria = '$fk_categoria' WHERE id_maquina='$id_maquina'");
               mysqli_query($db,"UPDATE maquinas SET fk_estado = '$fk_estado' WHERE id_maquina='$id_maquina'");
              


                    echo "Maquina modificada correctamente<br/>";
                    header("location:inventario.php");
                    
                }
            }
          }
$final= new Maquina();
$final->actualizando_maquina($_POST["id_maquina"],$_POST["codigo_maquina"],$_POST["maquina"],$_POST["fk_marca"],$_POST["fk_categoria"],$_POST["estado"]);
?>
</body>
 </html>