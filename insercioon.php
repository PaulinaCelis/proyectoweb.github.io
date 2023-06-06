<?php

include("conexion.php");

$id_anillo = $_POST["id_anillo"];
$nombre_anillo = $_POST["nombre_anillo"];
$precio_anillo = $_POST["precio_anillo"];

$id_aretes = $_POST["id_aretes"];
$nombre_aretes = $_POST["nombre_aretes"];
$precio_aretes = $_POST["precio_aretes"];

$id_collar = $_POST["id_collar"];
$nombre_collar = $_POST["nombre_collar"];
$precio_collar = $_POST["precio_collar"];

$id_pulsera = $_POST["id_pulsera"];
$nombre_pulsera = $_POST["nombre_pulsera"];
$precio_pulsera = $_POST["precio_pulsera"];

$query = "INSERT INTO anillos VALUES('".$id_anillo."' , '".$nombre_anillo."', '".$precio_anillo."');";
$query .= "INSERT INTO aretes VALUES('".$id_aretes."' , '".$nombre_aretes."', '".$precio_aretes."');";
$query .= "INSERT INTO collares VALUES('".$id_collar."' , '".$nombre_collar."', '".$precio_collar."');";
$query .= "INSERT INTO pulseras VALUES('".$id_pulsera."' , '".$nombre_pulsera."', '".$precio_pulsera."');";

if ($conexion->multi_query($query)) {
    echo "Inserción exitosa";
} else {
    echo "No se realizó la inserción";
}

?>