<?php

include("conexion2.php");
$rfc=$_POST["rfc"];
$nombre=$_POST["nombre"];

echo "rfc".$rfc;
echo "nombre".$nombre;

$query="INSERT INTO ultima VALUES('".$rfc."' , '".$nombre."')";
$resultado6=$conexion2->query($query6);

if($resultado6){
    echo "Insercion exitosa"; }


    else{
  echo "No se realizo la insercion";
    }


?>