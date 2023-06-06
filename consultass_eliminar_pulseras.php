<!DOCTYPE html>
<html>
<head>
    <title>Advertencia de ventana emergente</title>
    <script type="text/javascript">
        function confirmarEliminacion() {
            return confirm("Esta seguro de que desea eliminar este elemento?");
        }
    </script>
    <script type="text/javascript">
        function confirmarActualizar() {
            return confirm("Esta seguro de que desea Actualizar este elemento?");
        }
    </script>
</head>
<body>
<?php
include ("conexion.php");
$result3= mysqli_query ($conexion, "SELECT * FROM pulseras");

echo
"
<table width=\"100%\" border = \"1\">
<th>  F O R M U L A R I O   P A R A   C O N S U L T A  </th>


<TR>
<TD><B><CENTER>ID PULSERA</CENTER></B></TD>
<TD><B><CENTER>NOMBRE PULSERA</CENTER></B></TD>
<TD><B><CENTER>PRECIO PULSERA</CENTER></B></TD>
<TD><B><CENTER>Pulse para eliminar</CENTER></B></TD>
<TD><B><CENTER>Pulse para actualizar</CENTER></B></TD>
</TR>



";
while ($consulta3 = mysqli_fetch_array ($result3)){
    echo
    "<TR>


<TD>".$consulta3['id_pulsera']."</TD>
<TD>".$consulta3['nombre_pulsera']."</TD>
<TD>".$consulta3['precio_pulsera']."</TD>
<TD><br><form method='POST' action='elimina_pulseras.php' onsubmit='return confirmarEliminacion()'> \n
<input type='hidden' name='id_pulsera' value='".$consulta3['id_pulsera']."'>
<input type='submit' value='Eliminar Registro'> 

</form>
<td>
    <form method='POST' action='actualizaar_pulseras.php' onsubmit='return confirmarActualizar()' >\n
        <input type='hidden' name='id_pulsera' value='".$consulta3['id_pulsera']."'>
        <input type='text' name='nuevo_nombrecuarzo3' placeholder='Nuevo Nombre'>
        <input type='submit' name='actualizar' value='Actualizar'>
    </form>
</td>

</TR>";
}


echo "</table>"


?>
 
</body>
</html>