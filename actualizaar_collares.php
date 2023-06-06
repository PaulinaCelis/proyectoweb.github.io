<?php
// include conecta php
include("conexion.php");
$id_collar = $_POST['id_collar'];
$nuevo_nombrecuarzo2 = $_POST['nuevo_nombrecuarzo2']; // Nuevo valor para el nombre
$existe = 0;

if ( $id_collar == "") {
    echo "El id del collar es un campo obligatorio.";
} 
else if ($nuevo_nombrecuarzo2 == "") {
    echo "El nuevo nombre es un campo obligatorio.";
} else {
    $resultados2 = mysqli_query($conexion, "SELECT * FROM collares WHERE id_collar='$id_collar'");
    while ($consulta2 = mysqli_fetch_array($resultados2)) {
        $existe++;
    }
    if ($existe == 0) {
        echo "El collar solicitado no existe.";
    } 
    else {
        $_UPDATE_SQL = "UPDATE collares SET nombre_collar='$nuevo_nombrecuarzo2' WHERE id_collar= '$id_collar'";
        mysqli_query($conexion, $_UPDATE_SQL);
        echo "El registro con el id $id_collar ha sido actualizado con el nuevo nombre $nuevo_nombrecuarzo2.";
    }
}
header("location: consultass_eliminar_collares.php");
?>