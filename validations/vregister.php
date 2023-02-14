<?php

include("conexion.php");

$nombre = $_POST['txtName'];
$apellido = $_POST['txtLastname'];
$correo = $_POST['txtEmail'];
$contraseña = $_POST['txtPass'];

$cifrado = md5($contraseña);

$insertar = "INSERT INTO usuarios(nombre, apellidos, email, contraseña) VALUES ('$nombre','$apellido','$correo','$cifrado')";

$query = mysqli_query($con,$insertar);

if($query) {
  echo '<script> alert("Se ha registrado correctamente"); 
  location.href = "../login";
  </script>';
} else {
  echo '<script> alert("No se ha podido registrar como usuario"); 
  location.href = "../register"
  </script>';
}

?>