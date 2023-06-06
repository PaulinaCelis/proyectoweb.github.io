<?php
include("conexion.php");
//$result = mysqli_query($conexion, "SELECT * FROM anillos");
$id_anillo = $_POST['id_anillo'];
echo $id_anillo; 
 $existe = 0;

 if($id_anillo ==""){
     echo "El id anillo es un campo obligatorio";
 }
 else{
     $result = mysqli_query($conexion, "SELECT * FROM anillos");
     while ($consulta = mysqli_fetch_array($result)){
         $existe++;
     }
     if($existe == 0){
         echo "El id de anillo NO existe";
     }
     else{
         $DELETE_SQL = "DELETE FROM anillos WHERE id_anillo='$id_anillo'"; 
         mysqli_query($conexion, $DELETE_SQL);
         echo "El registro ha sido eliminado";

         }
     }

     // ARETES

     //$result = mysqli_query($conexion, "SELECT * FROM aretes");
$id_aretes = $_POST['id_aretes'];
echo $id_aretes; 
 $existe1 = 0;

 if($id_aretes ==""){
     echo "El id aretes es un campo obligatorio";
 }
 else{
     $result1 = mysqli_query($conexion, "SELECT * FROM aretes");
     while ($consulta1 = mysqli_fetch_array($result1)){
         $existe1++;
     }
     if($existe1 == 0){
         echo "El id de aretes NO existe";
     }
     else{
         $DELETE_SQL = "DELETE FROM aretes WHERE id_aretes='$id_aretes'"; 
         mysqli_query($conexion, $DELETE_SQL);
         echo "El registro ha sido eliminado";

         }
     }

      header("location: consultass_eliminar_anillos.php");
?>