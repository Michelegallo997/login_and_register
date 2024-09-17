<?php
include 'conexion_ba.php';

$nombre_completo = mysqli_real_escape_string($conexion, $_POST['nombre_completo']);
$correo = mysqli_real_escape_string($conexion, $_POST['correo']);
$usuario = mysqli_real_escape_string($conexion, $_POST['usuario']);
$contrasena = mysqli_real_escape_string($conexion, $_POST['contrasena']);
$contrasena = hash('sha512', $contrasena);


//verficar correo y usuario

$verficar_correo=mysqli_query($conexion, "SELECT * from usuarios WHERE correo='$correo'");

if(mysqli_num_rows($verficar_correo) > 0){
    echo '<script>
    alert("este correo ya esta registrado,intente con otro");
    window.location.href = "index.php";
    </script>';
exit();
}
$verficar_usuario=mysqli_query($conexion, "SELECT * from usuarios WHERE usuario='$usuario'");

if(mysqli_num_rows($verficar_usuario) > 0){
    echo '<script>
    alert("este usuario ya esta registrado, intente con otro");
    window.location.href = "index.php";
    </script>';
exit();
}

$query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena) 
          VALUES('$nombre_completo', '$correo', '$usuario', '$contrasena')";

$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    echo '<script>
    alert("Usuario registrado exitosamente");
    window.location.href = "index.php";
    </script>';
} else {
    echo '<script>
    alert("Error en el registro");
    </script>';
}

mysqli_close($conexion);
