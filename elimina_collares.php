<?php
include("conexion.php");
//$result = mysqli_query($conexion, "SELECT * FROM collares");
$id_collar = $_POST['id_collar'];
echo $id_collar; 
 $existe = 0;

 if($id_collar ==""){
     echo "El id collar es un campo obligatorio";
 }
 else{
     $result2 = mysqli_query($conexion, "SELECT * FROM collares");
     while ($consulta2 = mysqli_fetch_array($result2)){
         $existe++;
     }
     if($existe == 0){
         echo "El id de collares NO existe";
     }
     else{
         $DELETE_SQL = "DELETE FROM collares WHERE id_collar='$id_collar'"; 
         mysqli_query($conexion, $DELETE_SQL);
         echo "El registro ha sido eliminado";

         }
     }

   
      header("location: consultass_eliminar_collares.php");
?>