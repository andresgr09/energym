
<?php
include("seguridad_admin.php");

class Maquina
{
    private $id_maquina;

    public function __construct($id_maquina)
    {
        $this->id_maquina = $id_maquina;
    }

    public function eliminarMaquina()
    {
        include("conexion.php");

        $query = "DELETE FROM maquinas WHERE id_maquina='$this->id_maquina'";
        mysqli_query($db, $query);

        mysqli_close($db);
    }
}

if (isset($_POST["id_maquina"])) {
    $maquina = new Maquina($_POST["id_maquina"]);
    $maquina->eliminarMaquina();

    header("Location: inventario.php");
    exit();
}
?>

 

