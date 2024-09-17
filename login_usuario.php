<?php
 include 'conexion_ba.php';

$correo = $POST['correo'];
$contrasena = $POST['contrasena'];

$validar_login= mysqli_query($conexion, "SELECT * from usuarios WHERE correo='$correo' and contrasena='$contrasena'");
if(mysqli_num_rows($validar_login) > 0){
   header("location: bienvenida.php");
   exit;
}

?>