<?php
include("conexion.php");
//$result = mysqli_query($conexion, "SELECT * FROM anillos");
$id_aretes = $_POST['id_aretes'];
echo $id_aretes; 
 $existe = 0;

 if($id_aretes ==""){
     echo "El id aretes es un campo obligatorio";
 }
 else{
     $result1 = mysqli_query($conexion, "SELECT * FROM aretes");
     while ($consulta1 = mysqli_fetch_array($result1)){
         $existe++;
     }
     if($existe == 0){
         echo "El id de aretes NO existe";
     }
     else{
         $DELETE_SQL = "DELETE FROM aretes WHERE id_aretes='$id_aretes'"; 
         mysqli_query($conexion, $DELETE_SQL);
         echo "El registro ha sido eliminado";

         }
     }

   
      header("location: consultass_eliminar_aretes.php");
?>