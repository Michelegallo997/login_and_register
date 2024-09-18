<?php
include 'conexion_ba.php';

$nombre_completo = mysqli_real_escape_string($conexion, $_POST['nombre_completo']);
$correo = mysqli_real_escape_string($conexion, $_POST['correo']);
$usuario = mysqli_real_escape_string($conexion, $_POST['usuario']);
$contrasena = mysqli_real_escape_string($conexion, $_POST['contrasena']);

// Hash de la contraseña
$contrasena = hash('sha512', $contrasena);

// Mostrar el hash de la contraseña para depuración
echo "Hash de la contraseña al registrarse: " . $contrasena . "<br>";

// Verificar si el correo ya está registrado
$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'");
if (mysqli_num_rows($verificar_correo) > 0) {
    echo '<script>
    alert("Este correo ya está registrado, intente con otro.");
    window.location.href = "index.php";
    </script>';
    exit();
}

// Verificar si el usuario ya está registrado
$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario'");
if (mysqli_num_rows($verificar_usuario) > 0) {
    echo '<script>
    alert("Este usuario ya está registrado, intente con otro.");
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
?>
