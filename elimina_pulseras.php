<?php
include("conexion.php");
//$result = mysqli_query($conexion, "SELECT * FROM pulseras");
$id_pulsera = $_POST['id_pulsera'];
echo $id_pulsera; 
 $existe = 0;

 if($id_pulsera ==""){
     echo "El id pulsera es un campo obligatorio";
 }
 else{
     $result3 = mysqli_query($conexion, "SELECT * FROM pulseras");
     while ($consulta3 = mysqli_fetch_array($result3)){
         $existe++;
     }
     if($existe == 0){
         echo "El id de pulseras NO existe";
     }
     else{
         $DELETE_SQL = "DELETE FROM pulseras WHERE id_pulsera='$id_pulsera'"; 
         mysqli_query($conexion, $DELETE_SQL);
         echo "El registro ha sido eliminado";

         }
     }

   
      header("location: consultass_eliminar_pulseras.php");
?>