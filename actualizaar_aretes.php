<?php
// include conecta php
include("conexion.php");
$id_aretes = $_POST['id_aretes'];
$nuevo_nombrecuarzo1 = $_POST['nuevo_nombrecuarzo1']; // Nuevo valor para el nombre
$existe = 0;

if ( $id_aretes == "") {
    echo "El id del aretes es un campo obligatorio.";
} 
else if ($nuevo_nombrecuarzo1 == "") {
    echo "El nuevo nombre es un campo obligatorio.";
} else {
    $resultados1 = mysqli_query($conexion, "SELECT * FROM aretes WHERE id_aretes='$id_aretes'");
    while ($consulta1 = mysqli_fetch_array($resultados1)) {
        $existe++;
    }
    if ($existe == 0) {
        echo "Los aretes solicitados no existen.";
    } 
    else {
        $_UPDATE_SQL = "UPDATE aretes SET nombre_aretes='$nuevo_nombrecuarzo1' WHERE id_aretes= '$id_aretes'";
        mysqli_query($conexion, $_UPDATE_SQL);
        echo "El registro con el id $id_aretes ha sido actualizado con el nuevo nombre $nuevo_nombrecuarzo1.";
    }
}
header("location: consultass_eliminar_aretes.php");
?>