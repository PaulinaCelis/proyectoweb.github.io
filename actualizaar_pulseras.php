<?php
// include conecta php
include("conexion.php");
$id_pulsera = $_POST['id_pulsera'];
$nuevo_nombrecuarzo3 = $_POST['nuevo_nombrecuarzo3']; // Nuevo valor para el nombre
$existe = 0;

if ( $id_pulsera == "") {
    echo "El id de la pulsera es un campo obligatorio.";
} 
else if ($nuevo_nombrecuarzo3 == "") {
    echo "El nuevo nombre es un campo obligatorio.";
} else {
    $resultados3 = mysqli_query($conexion, "SELECT * FROM pulseras WHERE id_pulsera='$id_pulsera'");
    while ($consulta3 = mysqli_fetch_array($resultados3)) {
        $existe++;
    }
    if ($existe == 0) {
        echo "La pulsera solicitada no existen.";
    } 
    else {
        $_UPDATE_SQL = "UPDATE pulseras SET nombre_pulsera='$nuevo_nombrecuarzo3' WHERE id_pulsera= '$id_pulsera'";
        mysqli_query($conexion, $_UPDATE_SQL);
        echo "El registro con el id $id_pulsera ha sido actualizado con el nuevo nombre $nuevo_nombrecuarzo3.";
    }
}
header("location: consultass_eliminar_pulseras.php");
?>