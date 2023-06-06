<html>
    <title>Consultar productos</title>
<?php
include("conexion.php");

// Consulta de anillos
$result = mysqli_query($conexion, "SELECT * FROM anillos");

// Crear la tabla
echo '<table width="100%" border="1">';

// Filas y celdas de encabezado para la consulta de anillos
echo '<tr><th colspan="3"> A N I L L O S</th></tr>';
echo '<tr><td><b><center>ID ANILLO</center></b></td><td><b><center>NOMBRE ANILLO</center></b></td><td><b><center>PRECIO ANILLO</center></b></td></tr>';

// Imprimir filas de la consulta de anillos
while ($consulta = mysqli_fetch_array($result)) {
    echo '<tr>';
    echo '<td>' . $consulta['id_anillo'] . '</td>';
    echo '<td>' . $consulta['nombre_anillo'] . '</td>';
    echo '<td>' . $consulta['precio_anillo'] . '</td>';
    echo '</tr>';
}

// Consulta de aretes
$result1 = mysqli_query($conexion, "SELECT * FROM aretes");

// Filas y celdas de encabezado para la consulta de aretes
echo '<tr><th colspan="3">A R E T E S </th></tr>';
echo '<tr><td><b><center>ID ARETES</center></b></td><td><b><center>NOMBRE ARETES</center></b></td><td><b><center>PRECIO ARETES</center></b></td></tr>';

// Imprimir filas de la consulta de aretes
while ($consulta1 = mysqli_fetch_array($result1)) {
    echo '<tr>';
    echo '<td>' . $consulta1['id_aretes'] . '</td>';
    echo '<td>' . $consulta1['nombre_aretes'] . '</td>';
    echo '<td>'. $consulta1['precio_aretes'] . '</td>';
    echo '</tr>';
}

// Consulta de collares
$result2 = mysqli_query($conexion, "SELECT * FROM collares");

// Filas y celdas de encabezado para la consulta de collares
echo '<tr><th colspan="3">C O L L A R E S </th></tr>';
echo '<tr><td><b><center>ID COLLAR</center></b></td><td><b><center>NOMBRE COLLAR</center></b></td><td><b><center>PRECIO COLLAR</center></b></td></tr>';

// Imprimir filas de la consulta de collares
while ($consulta2 = mysqli_fetch_array($result2)) {
    echo '<tr>';
    echo '<td>' . $consulta2['id_collar'] . '</td>';
    echo '<td>' . $consulta2['nombre_collar'] . '</td>';
    echo '<td>' . $consulta2['precio_collar'] . '</td>';
    echo '</tr>';
}

// Consulta de pulseras
$result3 = mysqli_query($conexion, "SELECT * FROM pulseras");

// Filas y celdas de encabezado para la consulta de pulseras
echo '<tr><th colspan="3">P U L S E R A S</th></tr>';
echo '<tr><td><b><center>ID PULSERA</center></b></td><td><b><center>NOMBRE PULSERA</center></b></td><td><b><center>PRECIO PULSERA</center></b></td></tr>';

// Imprimir filas de la consulta de pulseras
while ($consulta3 = mysqli_fetch_array($result3)) {
    echo '<tr>';
    echo '<td>' . $consulta3['id_pulsera'] . '</td>';
    echo '<td>' . $consulta3['nombre_pulsera'] . '</td>';
    echo '<td>' . $consulta3['precio_pulsera'] . '</td>';
    echo '</tr>';
}

// Cerrar la tabla HTML
echo '</table>';
?>