<?php

include("conexion.php");

session_start();
$correo = $_POST['txtEmail'];
$contraseña = $_POST['txtPass'];

$cifrado = md5($contraseña);

$query = "SELECT * FROM usuarios WHERE email = '$correo' AND contraseña = '$cifrado'";

$consulta = mysqli_query($con,$query);

if($consulta->num_rows > 0) {
  $row = mysqli_fetch_assoc($consulta);
  $_SESSION['username'] = $correo;
  header("location: ../home");
} else {
  echo '<script> alert("El correo o contraseña son incorrectos"); 
  location.href = "../login"
  </script>';
}
?>