<?php
// include conecta php
include("conexion.php");
$id_anillo = $_POST['id_anillo'];
$nuevo_nombrecuarzo = $_POST['nuevo_nombrecuarzo']; // Nuevo valor para el nombre
$existe = 0;

if ( $id_anillo == "") {
    echo "El id del anillo es un campo obligatorio.";
} 
else if ($nuevo_nombrecuarzo == "") {
    echo "El nuevo nombre es un campo obligatorio.";
} else {
    $resultados = mysqli_query($conexion, "SELECT * FROM anillos WHERE id_anillo='$id_anillo'");
    while ($consulta = mysqli_fetch_array($resultados)) {
        $existe++;
    }
    if ($existe == 0) {
        echo "El anillo solicitado no existe.";
    } 
    else {
        $_UPDATE_SQL = "UPDATE anillos SET nombre_anillo='$nuevo_nombrecuarzo' WHERE id_anillo= '$id_anillo'";
        mysqli_query($conexion, $_UPDATE_SQL);
        echo "El registro con el id $id_anillo ha sido actualizado con el nuevo nombre $nuevo_nombrecuarzo.";
    }
}
header("location: consultass_eliminar_anillos.php");
?>