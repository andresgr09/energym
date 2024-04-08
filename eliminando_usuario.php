
<?php
include("seguridad_admin.php");

class Usuario
{
    private $documento;

    public function __construct($documento)
    {
        $this->documento = $documento;
    }

    public function eliminarUsuario()
    {
        include("conexion.php");

        $query = "DELETE FROM usuarios WHERE documento='$this->documento'";
        mysqli_query($db, $query);

        mysqli_close($db);
        include("conexion.php");
        $query1 = "DELETE FROM permisos WHERE documento='$this->documento'";
        mysqli_query($db, $query1);

        mysqli_close($db);
        include("conexion.php");
        $query2 = "DELETE FROM solicitudes WHERE fk_documento='$this->documento'";
        mysqli_query($db, $query2);
    }
}

if (isset($_POST["documento"])) {
    $usuario = new Usuario($_POST["documento"]);
    $usuario->eliminarUsuario();
    
    header("Location:listar_usuarios.php");
 
    exit();
}

?>

 

