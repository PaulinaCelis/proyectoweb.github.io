<?php
$conexion= new mysqli("localhost","administrador","elgriego12345","joyeria");
if($conexion){
    echo "conexion exitosa";

}
else{
    echo "conexion no exitosa";
}
?>