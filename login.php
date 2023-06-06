<?php
include("conexion.php");

// Obtener datos del formulario
$username = mysqli_real_escape_string($conexion, $_POST['username']);
$password = mysqli_real_escape_string($conexion, $_POST['password']);

// Verificar si el usuario existe en la base de datos
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
  // Inicio de sesión exitoso, redirigir al usuario a la página "admin.html"
  header("Location: admin.html");
} else {
  // Inicio de sesión fallido, mostrar mensaje de error
  echo "Usuario o contraseña incorrectos";
}

$conexion->close();
?>