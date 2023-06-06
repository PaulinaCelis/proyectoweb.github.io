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
$result2= mysqli_query ($conexion, "SELECT * FROM collares");

echo
"
<table width=\"100%\" border = \"1\">
<th>  F O R M U L A R I O   P A R A   C O N S U L T A  </th>


<TR>
<TD><B><CENTER>ID COLLAR</CENTER></B></TD>
<TD><B><CENTER>NOMBRE COLLAR</CENTER></B></TD>
<TD><B><CENTER>PRECIO COLLAR</CENTER></B></TD>
<TD><B><CENTER>Pulse para eliminar</CENTER></B></TD>
<TD><B><CENTER>Pulse para actualizar</CENTER></B></TD>
</TR>



";
while ($consulta2 = mysqli_fetch_array ($result2)){
    echo
    "<TR>


<TD>".$consulta2['id_collar']."</TD>
<TD>".$consulta2['nombre_collar']."</TD>
<TD>".$consulta2['precio_collar']."</TD>
<TD><br><form method='POST' action='elimina_collares.php' onsubmit='return confirmarEliminacion()'> \n
<input type='hidden' name='id_collar' value='".$consulta2['id_collar']."'>
<input type='submit' value='Eliminar Registro'> 

</form>
<td>
    <form method='POST' action='actualizaar_collares.php' onsubmit='return confirmarActualizar()' >\n
        <input type='hidden' name='id_collar' value='".$consulta2['id_collar']."'>
        <input type='text' name='nuevo_nombrecuarzo2' placeholder='Nuevo Nombre'>
        <input type='submit' name='actualizar' value='Actualizar'>
    </form>
</td>

</TR>";
}


echo "</table>"


?>
 
</body>
</html>