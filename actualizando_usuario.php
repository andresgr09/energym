 <!DOCTYPE html>
 <html>
 <head>
   <title> actualizando usuario</title>
 </head>
 <body>
 
 
 <?php
        class Usuario{
            public function actualizando_usuario($id_usuario,$nombres, $apellidos, $documento, $password){
            {

        
               include ("conexion.php");
               mysqli_query($db,"UPDATE usuarios SET nombres = '$nombres' WHERE documento='$documento'");
               mysqli_query($db,"UPDATE usuarios SET apellidos = '$apellidos' WHERE documento='$documento'");
               mysqli_query($db,"UPDATE usuarios SET documento = '$documento' WHERE id_usuario='$id_usuario'");
               mysqli_query($db,"UPDATE usuarios SET password = '$password' WHERE documento='$documento'");
              


                    echo "Usuario modificado correctamente<br/>";
                    header("location:listar_usuarios.php");
                    
                }
            }
          }
$final= new Usuario();
$final->actualizando_usuario($_POST["id_usuario"],$_POST["nombres"],$_POST["apellidos"],$_POST["documento"],$_POST["password"]);
?>
</body>
 </html>