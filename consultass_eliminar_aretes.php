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
$result1= mysqli_query ($conexion, "SELECT * FROM aretes");

echo
"
<table width=\"100%\" border = \"1\">
<th>  F O R M U L A R I O   P A R A   C O N S U L T A  </th>


<TR>
<TD><B><CENTER>ID ARETES</CENTER></B></TD>
<TD><B><CENTER>NOMBRE ARETES</CENTER></B></TD>
<TD><B><CENTER>PRECIO ARETES</CENTER></B></TD>
<TD><B><CENTER>Pulse para eliminar</CENTER></B></TD>
<TD><B><CENTER>Pulse para actualizar</CENTER></B></TD>
</TR>



";
while ($consulta1 = mysqli_fetch_array ($result1)){
    echo
    "<TR>


<TD>".$consulta1['id_aretes']."</TD>
<TD>".$consulta1['nombre_aretes']."</TD>
<TD>".$consulta1['precio_aretes']."</TD>
<TD><br><form method='POST' action='elimina_aretes.php' onsubmit='return confirmarEliminacion()'> \n
<input type='hidden' name='id_aretes' value='".$consulta1['id_aretes']."'>
<input type='submit' value='Eliminar Registro'> 

</form>
<td>
    <form method='POST' action='actualizaar_aretes.php' onsubmit='return confirmarActualizar()' >\n
        <input type='hidden' name='id_aretes' value='".$consulta1['id_aretes']."'>
        <input type='text' name='nuevo_nombrecuarzo1' placeholder='Nuevo Nombre'>
        <input type='submit' name='actualizar' value='Actualizar'>
    </form>
</td>

</TR>";
}


echo "</table>"


?>
 
</body>
</html>