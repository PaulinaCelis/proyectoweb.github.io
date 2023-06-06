<?php
$conexioon2= new mysqli("localhost","administrador","elgriego12345","ultima");
if($conexioon2){
    echo "conexion exitosa";

}
else{
    echo "conexion no exitosa";
}
?>