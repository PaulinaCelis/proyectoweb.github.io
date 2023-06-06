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
$result= mysqli_query ($conexion, "SELECT * FROM anillos");

echo
"
<table width=\"100%\" border = \"1\">
<th>  F O R M U L A R I O   P A R A   C O N S U L T A  </th>


<TR>
<TD><B><CENTER>ID ANILLO</CENTER></B></TD>
<TD><B><CENTER>NOMBRE ANILLO</CENTER></B></TD>
<TD><B><CENTER>PRECIO ANILLO</CENTER></B></TD>
<TD><B><CENTER>Pulse para eliminar</CENTER></B></TD>
<TD><B><CENTER>Pulse para actualizar</CENTER></B></TD>
</TR>



";
while ($consulta = mysqli_fetch_array ($result)){
    echo
    "<TR>


<TD>".$consulta['id_anillo']."</TD>
<TD>".$consulta['nombre_anillo']."</TD>
<TD>".$consulta['precio_anillo']."</TD>
<TD><br><form method='POST' action='elimina_anillos.php' onsubmit='return confirmarEliminacion()'> \n
<input type='hidden' name='id_anillo' value='".$consulta['id_anillo']."'>
<input type='submit' value='Eliminar Registro'> 

</form>
<td>
    <form method='POST' action='actualizaar.php' onsubmit='return confirmarActualizar()' >\n
        <input type='hidden' name='id_anillo' value='".$consulta['id_anillo']."'>
        <input type='text' name='nuevo_nombrecuarzo' placeholder='Nuevo Nombre'>
        <input type='submit' name='actualizar' value='Actualizar'>
    </form>
</td>

</TR>";
}


echo "</table>"


?>
 
</body>
</html>